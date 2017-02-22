<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function contests(){

        return $this->hasMany(Contest::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

}
