<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'profile_img'
    ];
    protected $guarded = [];
}
// NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION