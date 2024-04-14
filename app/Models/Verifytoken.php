<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifytoken extends Model
{
    use HasFactory;
    protected $table ='verifytokens';

    protected $fillable = ['token', 'email', 'is_activated'];
}
