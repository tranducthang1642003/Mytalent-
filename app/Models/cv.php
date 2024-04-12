<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    
    protected $table = 'cv'; 
    use HasFactory;
    protected $fillable = [
        'name',
        'gioitinh',
        'sdt',
        'email',
        'date',
        'diachi',
        'file',
        'link',
        'daihoc',
        'truonghoc',
        'hinhthucluong',
        'chungchi',
        'nghanhnghe',
        'luong',
        'mucluong',
        'vitri',
    ];
}
