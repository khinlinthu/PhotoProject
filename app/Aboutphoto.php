<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutphoto extends Model
{
    protected $fillable = ['name','photo','description','note','photo_contest_id'];

    public function photo_contest()
  {
      return $this->belongsTo('App\PhotoContest');
  }
}
