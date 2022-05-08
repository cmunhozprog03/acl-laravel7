<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    protected $fillable = ['replay'];

    public function thread(){
        return $this->belongsTo(Thread::class);
    }
}
