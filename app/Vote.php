<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable=[
    
    'image_id',
    'user_id',
    'count'

    ];
    public function photo()
    {
    	return $this->belongsTo(photo::class,'image_id');
    }
}
