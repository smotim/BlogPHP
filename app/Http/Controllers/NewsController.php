<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function  index(){
        $news = DB::table('news')->paginate(3);
        return view('home', ['news' => $news]);
        //News::all()->paginate(5);
        //TODO разобраться с paginate
    }
}
