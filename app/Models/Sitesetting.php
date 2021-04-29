<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    use HasFactory;
    protected $table='sitesetting' ;
    protected $fillable = [
    'Site_title',
    'Email_address',
    'Phone_number',
    'Address',
    'Currency',
    'Footer_copyright_text',
    'Footer_text',
    'Footer_image',
    'Header_logo',
    'Footer_logo',
    'Fav_icon',
    ];
}
