<?php

namespace App\Models;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function events(){
      return $this->hasMany(Event::class);
    }
}
