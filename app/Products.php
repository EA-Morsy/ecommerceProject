<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $guard=[];
    protected $fillable=["name","categoryID","price","desc","pic"];
    public $timestamps=false;
}
