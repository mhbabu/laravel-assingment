<?php

namespace App\Modules\Employee\Models;

use Illuminate\Database\Eloquent\Model;

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
        'updated_at'
    ];

}
