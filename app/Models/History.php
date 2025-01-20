<?php

namespace App\Models;
use App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function event(){
      return $this->belongsTo(Event::class);
    }
    
}
