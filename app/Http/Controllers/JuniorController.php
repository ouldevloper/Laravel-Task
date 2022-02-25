<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuniorController extends Controller
{
    public function Home(Request $r){
        $controller = get_class($this);
        $controller = explode('\\',$controller);
        $controller = $controller[count($controller)-1];
        $controller = str_replace("Controller","",$controller);
        $action = __function__;
        $currtime = date('Y-m-d  h:i:sa');
        return view("junior.home",[
            'controller'=>$controller,
            'action'=>$action,
            'dt'=>$currtime
        ]);
    }
}
