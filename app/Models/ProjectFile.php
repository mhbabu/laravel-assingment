<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'file_name',
        'file_path',
        'upload_by',
    ];

    public function uploadUser()
    {
        return $this->hasOne(User::class, 'id', 'upload_by');
    }

    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
