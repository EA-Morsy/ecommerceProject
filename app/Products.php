<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $guard=[];

    protected $fillable=
    [   "name",
        "category_id",
        "user_id",
        "price",
        "desc",
        "pic"
    ];

    public $timestamps=false;

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
