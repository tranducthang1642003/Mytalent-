<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job'; 
    protected $fillable = [
        'vitri',
        'congty',
        'soluong',
        'lamviec',
        'kinhnghiem',
        'diachi',
        'loaihopdong',
        'kynang',
        'nganhnghe',
        'luong',
        'link',
        'keyword',
    ];


    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'job_keywords');
    }
}
