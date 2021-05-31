<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $fillable = ['courseid', 'userid', 'newsid', 'title', 'date', 'content'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
