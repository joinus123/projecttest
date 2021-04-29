<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
   protected $table='homepage' ;
       protected $fillable = [
            'home_page_id',
        	'section_one_logo',
        	'section_one_text',
        	'section_one_banner',
        	'section_one_box1_heading',
            'section_one_box1_text',
        	'section_one_box2_heading',
        	'section_one_box2_text',
        	'section_one_box3_heading',
        	'section_one_box3_text',
        	'section_two_heading',
        	'section_two_text',
        	'section_three_heading',
        	'section_three_image',
        	'section_four_heading',
            'updated_at',
            'created_at'
          ];
}
