<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs'; 
    protected $fillable = [
        'locations',
        'company',
        'quantity',
        'work',
        'addresss',
        'contract',
        'skill',
        'experience',
        'career',
        'wage',
        'salary',
        'jobdescription',
        'link',
        'status',
    ];


    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'job_keywords');
    }
}
