<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table = 'job'; 
    use HasFactory;
    protected $fillable = [
        
        'vitri',
        'congty',
        'soluong',
        'motangan',
        'lamviec',
        'diachi',
        'loaihopdong',
        'kinhnghiem',
        'kynang',
        'nganhnghe',
        'luong',
        'keyword',
        'link',
    ];
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'job_keyword');
    }

}
