<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        // عشان امنع المستخدم انه يشوف اي method من دول إلا لما يدخل علي صفحة ال login
       //وجملة ال except لاستثناء الدالة دي منهم
        $this->middleware('auth')->except('test2');
    }


    public function test1()
   {
       return "welcome from adminController from test1";
   }
    public function test2()
    {
        return "welcome from adminController from test2";
    }
    public function test3()
    {
        return "welcome from adminController from test3";
    }
}
