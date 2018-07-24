<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=['fileName'];

    protected $upload ='/images/';

    public function getFileNameAttribute($photo){

        return $this->upload . $photo;
    }
}
