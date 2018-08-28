<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function join()
    {
    	$res = DB::table('goods')
    		->join('goods_fu','goods.cate_id','=','goods_fu.id')
    		->take(10)
    		->get();
    	dd($res);
    }
}
