<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class userController extends Controller
{
    //
    function list($id)
    {
        return User::find($id);
    }
    function add(Request $request)
    {   $user=$request->all();
        return User::create($user);
    }

   
}
