<?php

namespace App\Models;
use App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable= ["user_id", "event_id"];
    public function event(){
      return $this->belongsTo(Event::class);
    }
}
