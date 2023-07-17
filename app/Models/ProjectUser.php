<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'user_id',
    ];

    public function project_users()
    {
        return $this->hasManyThrough(Project::class, User::class);
    }
}
