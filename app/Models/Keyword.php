<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['keyword'];

    public static function createOrUpdate($keyword)
    {
        if (!empty($keyword)) {
            return static::firstOrCreate(['keyword' => trim($keyword)]);
        }
        return null; 
    }

    public function cv()
    {
        return $this->belongsToMany(Cv::class, 'cv_keywords');
    }
}
