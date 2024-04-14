<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table = 'cv';
    
    protected $fillable = [
        'name',
        'gioitinh',
        'phone',
        'email',
        'date',
        'Address',
        'Education',
        'school',
        'Language',
        'Certificate',
        'location',
        'career',
        'skills',
        'Currentsalary',
        'Desiredsalary',
        'Image',
        'file',
        'keyword',
        'Link',
        'job_id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
