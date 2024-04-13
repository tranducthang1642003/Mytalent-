<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifytokem extends Model
{
    use HasFactory;
    protected $table ='verifytokem';

    protected $fillable = [
        'token',
        'email',
        'is_activated',
    ];

}
