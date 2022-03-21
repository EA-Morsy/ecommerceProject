<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function create()
    {   
        return view('admin.addCategory');
    }

    public function store()
    {
        $data=request()->only('name');
        $category=Category::create($data);

        return view('admin.dashboard');
    }
}
