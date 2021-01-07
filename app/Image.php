<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
    
    'image',
    'user_id',
    'vote_id'

    ];

    public function vote()
    {
    	return $this->hasMany('App\Vote');
    }
    public function photo()
    {
    	return $this->belongsTo(user::class,'id');
    }
}
