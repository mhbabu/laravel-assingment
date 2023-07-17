<?php

namespace App\Modules\Employee\Models;

use App\Models\User;
use App\Modules\Company\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model {

    protected $table = 'employees';
    protected $fillable = [
        'id',
        'company_id',
        'employee_id_no',
        'name',
        'email',
        'mobile',
        'address',
        'status',
        'is_archive',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function getEmployeeList()
    {
        return Employee::leftJoin('companies','companies.id','=','employees.company_id')
        ->where('employees.is_archive', 0)
        ->orderBy('employees.id','desc');
    }

    /**
     * Get the user that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    /**
     * Get the comapany that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comapany(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($data) {
            if (auth()->check()) {
                $data->created_by = auth()->user()->id;
                $data->updated_by = auth()->user()->id;
            }
        });

        static::updating(function ($data) {
            $data->updated_by = auth()->user()->id;
        });
    }

}
