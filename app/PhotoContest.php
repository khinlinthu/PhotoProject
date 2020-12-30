<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoContest extends Model
{
    protected $fillable = ['name','photo'];

    public function aboutphotos()
  {
      return $this->hasMany('App\Aboutphoto');
  }
}