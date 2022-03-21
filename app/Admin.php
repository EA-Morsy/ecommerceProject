<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    public $timestamps=false;
    //
    
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password'
    ];

    public function products()
    {
       return $this->hasMany(Products::class);
    }

}
