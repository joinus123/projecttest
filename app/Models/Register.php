<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='register';
    protected $fillable = [
        'register_banner_image',
        'register_heading',
        'register_text',
    ];
}
