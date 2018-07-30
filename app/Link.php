<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['link', 'user', 'count'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
