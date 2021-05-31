<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['newsid', 'userid', 'title', 'content', 'date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
