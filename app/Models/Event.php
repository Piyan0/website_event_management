<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function tag(){
      return $this->belongsTo(Tag::class);
    }
    
    public function comments(){
      return $this->hasMany(Comment::class);
    }
}
