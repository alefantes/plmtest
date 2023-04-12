<?php

namespace App\Http\Controllers\Plm;

use App\Http\Controllers\Controller;
//use App\Http\Requests\Plm\StoreRequest;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke() //request
    {
        $data = $request->validated();
//        try {
//
//            DB::beginTransaction();
//
//            Purchase::firstOrCreate([
//
//            ]); //для того чтобы не дать создать дубликат. но и на фронте проверяем. если мы проверяем и создаем один ключ то в один массив иначе проверяемый ключ и списко аттрибутов
//
//            DB::commit();
//            return redirect()->route('plm.index'); //?????
//        } catch (\Exception $exception) {
//            DB::rollBack();
//            abort('500');
//        }
    }
}
