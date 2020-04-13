<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

// use Illuminate\Support\Facades\DB;
// モデルを生成すれば記述は不要になる

class EntriesController extends Controller
{
    //indexアクション
    public function index() {
        // $entries = DB::select("select * from entries");
        // // クエリ文で取得している
        $entries = Entry::all();
        foreach ($entries as $entry){
        var_dump($entry->title);}
    }
}
