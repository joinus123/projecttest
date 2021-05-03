<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqpage extends Model
{
    use HasFactory;
    protected $table='faqpage' ;
    protected $fillable = [
        'id',
    	'faqpage_heading',
        'faqpage_image',
    ];
}
