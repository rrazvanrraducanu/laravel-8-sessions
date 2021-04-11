<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title='Login Form';
        return view('login_view')->with('title',$title);
    }
    public function check(Request $request){
       if((($_POST["username"]=="user1")&&($_POST["password"]=="pass1")))
	{
         $request->session()->put('username', $_POST["username"]);
        return redirect('login_success');
}
else{
    echo "Wrong input!";
  exit;
    }  
    }
    public function ura(Request $request){
             if($request->session()->has('username')){
return view('ura')->with('uname',$request->session()->get('username'));
             }
             else{
                 return redirect('/login');
             }

    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
