<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $data = DB::select("SELECT * from currency_market_lib");
        return view('index',[
            'data' => $data
        ]);
    }

    public function show(Request $request){
        $request->all();
        $dan = $request['dan'];
        $gacha = $request['gacha'];
        $gacha = date('Y-m-d', strtotime("+1 day", strtotime($gacha)));

        $data = DB::select("SELECT * from currency_market_lib where (updated_at >= '$dan' and updated_at <= '$gacha')");
        return view('index',[
            'data' => $data
        ]);
    }
}
