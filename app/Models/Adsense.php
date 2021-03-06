<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adsense extends Model
{
    use HasFactory;
    protected $table ='adsense';
    protected $fillable =[
      'img_ads1',
      'link_ads1',
      'show_ads1',
      'img_ads2',
      'link_ads2',
      'show_ads2'
    ];
}
