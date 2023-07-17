<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    use HasFactory;

    protected $table = 'user_files';
    protected $fillable = [
        'user_id',
        'title',
        'attachment',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    static function getUserFile()
    {
        $query = UserFile::query();

        if (auth()->user()->user_type == 4) {
            return $query->where('user_id', '=', auth()->user()->id);
        }
        return $query;
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
