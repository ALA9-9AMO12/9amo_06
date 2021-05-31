<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = ['postid', 'userid', 'title', 'content', 'date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
