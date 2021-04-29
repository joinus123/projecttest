<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testinomial extends Model
{
    use HasFactory;
    protected $table='addtestinomial' ;
    protected $fillable = [
    	'testinomials_name',
        'testinomials_text',
        'testinomials_image',
    ];
}
