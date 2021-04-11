<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('main_view');
    }
     //print the data for the key univ
    public function view(Request $request){
      if($request->session()->has('univ')){
         echo $request->session()->get('univ');
      }
      //print the data for the key color
      if($request->session()->has('color')){
          $data=$request->session()->get('color');
           foreach ( $data as $key=>$var )
                {
                    print "<br/>$key = = > $var<br/>";
                    }
      }else
         echo 'No data in the session';
   }
 public function set(Request $request){
       $colors=array('red','yellow','blue');
       //add a varible to session
      $request->session()->put('univ','"Al. I. Cuza"');
      //add a string to session
      $request->session()->put('color',$colors);
      //add another value to an existing string in session
      $request->session()->push('color','magenta');
      echo "Data has been added to session";
   }
   public function delete(Request $request){
       //delete the values for the key univ
      $request->session()->forget('univ');
      //delete the values for the key color
      $request->session()->forget('color');
      //delete all data from session
      //$request->session()->flush();
      echo "Data has been removed from session.";
   }
}

