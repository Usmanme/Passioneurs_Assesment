<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{


    use HasFactory;

    protected $fillable = [
        'project_images',
        'cover_photo',
        'job_skills',
        'work_description',
    ];

    protected $casts = [
        'project_images' => 'array',
    ];
}
