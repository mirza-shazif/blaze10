<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
  protected $fillable = ['media_caption', 'media', 'user_id'];
}
