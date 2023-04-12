<?php

namespace App\Http\Controllers\Plm;

use App\Http\Controllers\Controller;
use App\Models\Purchase;

class IndexController extends Controller
{
    public function __invoke()
    {
        $arr = [[
            'a'=>'1',
            'c'=>'1',
        ],[
        'a'=>'1',
        'c'=>'1',
    ],[
        'a'=>'1',
        'c'=>'1',
    ],]
        ;
        $co= json_encode($arr);
        dump($co);
        dump(json_decode($co));


        //$purchs = Purchase::all();
        //return response()->json($purchs);
    }
}
