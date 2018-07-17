<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = ['media_caption', 'media', 'user_id'];
}
