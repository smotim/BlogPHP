<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',['news'=> DB::table('news')->paginate(5)]);
        //$data['news'] = News::all();
        //return view::make('home', $data);
        //$editor_data = $_POST['editor1'];

    }

}

