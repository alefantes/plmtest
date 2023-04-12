<?php

namespace App\Http\Controllers\Plm;

use App\Http\Controllers\Controller;
use App\Models\Purchase;

class IndexController extends Controller
{
    public function __invoke()
    {
        $arr = [
            ['a'=>'1','c'=>'1',],
            ['a'=>'1','c'=>'7',],
            ['a'=>'7','c'=>'1',],
            ['a'=>'7','c'=>'1',],
            ];
        $co= json_encode($arr);
//        dump($co);
        $dec = json_decode($co, true);
//        dump($dec);
        foreach ($dec as $d){
            dump($d);
        }


        //$purchs = Purchase::all();
        //return response()->json($purchs);
    }
}
