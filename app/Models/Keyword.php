<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['keyword']; 
    /**
     * Tạo hoặc cập nhật từ khóa.
     *
     * @param string $keyword
     * @return Keyword
     */
    public static function createOrUpdate($keyword)
    {
        return static::firstOrCreate(['keyword' => trim($keyword)]);
    }
    public function cv()
    {
        return $this->belongsToMany(Cv::class, 'cv_keywords');
    }
}
