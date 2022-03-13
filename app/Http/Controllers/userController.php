<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   public function getIndex(){
       $title = "job";
       $info  = array(
           'name'   =>'Ali',
           'age'    =>'30',
           'address'=>'Menof',
       );
       $arr = [];
       return view('user',compact('title','info','arr'));
   }





}
