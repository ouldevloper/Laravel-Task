<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItunesModel;
class ItunesController extends Controller
{
    public function home(){
        $items = ItunesModel::skip(0)->take(10)->get();
        return view("midelle.home",['items'=>$items]);
    }


    public function show(Request $r,$id){
        $item = ItunesModel::find($id);
        return view("midelle.show",['item'=>$item]);
    }

}
