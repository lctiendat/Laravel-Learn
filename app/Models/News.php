<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table= 'news';
    protected $fillable = [
         'title',
         'content',
         'img',
         'post_date',
         'show',
         'user_id',
         'news_type_id'
    ];
    public function newsType(){
        return $this->belongsTo(NewsType::class);
      }
 }
// 