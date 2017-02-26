<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function contests(){

        return $this->hasMany(Contest::class, 'company_id');

    }

    public function create_contest(array $data){

        //$this->contests()->create($data);

    }
}
