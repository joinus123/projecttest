<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='contactus';
    protected $fillable = [
        'contact_image',
        'contact_banner_heading',
        'contact_heading',
        'contact_text',
    ];
}
