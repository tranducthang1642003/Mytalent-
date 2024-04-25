<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvs extends Model
{
    use HasFactory;
    protected $table = 'cvs';
    protected $fillable = [
        'name',
        'sex',
        'phone',
        'email',
        'date',
        'address',
        'education',
        'school',
        'language',
        'certificate',
        'location',
        'career',
        'skills',
        'currentsalary',
        'desiredsalary',
        'image',
        'feight',
        'weight',
        'maritalstatus',
        'hometown',
        'checkock',
    ];

    // public function keywords()
    // {
    //     return $this->belongsToMany(Keyword::class);
    // }


    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }
    public function setCheckockAttribute($value)
    {
        $this->attributes['checkock'] = json_encode($value);
    }

    public function getCheckockAttribute($value)
    {
        return $this->attributes['checkock'] = json_decode($value);
    }
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'cv_keywords');
    }

}
