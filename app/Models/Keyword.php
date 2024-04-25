<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['keywords']; 

    public static function createOrUpdate($keyword)
    {
        return static::firstOrCreate(['keyword' => trim($keyword)]);
    }
    public function cv()
    {
        return $this->belongsToMany(Cv::class, 'cv_keywords');
    }
}
