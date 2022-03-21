<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
class AdminController extends Controller
{
    //

    public function dashboard()
    {
      
        return view('admin.dashboard');
    }

    function adminLoginView()
    {
        return view('admin.login');
    }
    function adminLogin(Request $request)
    {   
       
       if(Auth::guard('admins')->attempt(['email'=>$request->email , 'password'=>$request->password]))
       {
         return redirect('/admin');
       }
       else{
           return back();
       }
    }

    public function adminLogout(Request $request)
    {
    
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return  redirect('/adminLogin');
    }
    
    public function adminLogoutView()
    {
        return redirect('/adminLogin');
    }

}
