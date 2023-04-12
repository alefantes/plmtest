<?php

namespace App\Http\Controllers\Plm;

use App\Http\Controllers\Controller;
use App\Models\Purchase;

class IndexController extends Controller
{
    public function __invoke()
    {
        $purchs = Purchase::all();
        return response()->json($purchs);
    }
}
