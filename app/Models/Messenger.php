<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;
    protected $table = 'messenger';
    protected $fillable = [
     'user_id',
     'content',
     'rep_content',
     'show'
    ];
}
