<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function contests(){

        return $this->belongsTo(Contest::class);

    }
}
