<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $guarded = [];

    public function companies(){

        return $this->belongsTo(Company::class);

    }


}
