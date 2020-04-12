<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntriesController extends Controller
{
    //indexアクション
    public function index() {
        $entries = DB::select("select * from entries");
        // クエリ文で取得している
        var_dump($entries);
    }
}
