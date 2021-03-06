<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    use HasFactory;
    protected $table = 'news_type';
    protected $fillable = [
        'name',
        'show',
        'category_id'
    ];
    public function categorys(){
        return $this->belongsTo(Category::class);
      }
      public function news(){
        return $this->hasMany(News::class,'news_type_id');
      }
}
