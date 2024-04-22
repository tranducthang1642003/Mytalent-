<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table = 'cv';
    
    protected $fillable = [
        'Name',
        'Gioitinh',
        'Phone',
        'Email',
        'Date',
        'Address',
        'Education',
        'School',
        'Language',
        'Certificate',
        'Location',
        'Career',
        'Skills',
        'Currentsalary',
        'Desiredsalary',
        'Image',
        'File',
        'Keyword',
        'Link',
        'Feight',
        'Weight',
        'Maritalstatus',
        'Hometown',
        'checkock',

    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
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
        return $this->belongsToMany(Keyword::class, 'cv_keyword');
    }
    
}
