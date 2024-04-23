<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $fillable = [
        'keywords',
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_keyword');
    }

    public function cvs()
    {
        return $this->belongsToMany(Cv::class, 'cv_keyword');
    }
}
