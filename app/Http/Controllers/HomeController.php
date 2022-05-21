<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['news'] = News::all();
        return view::make('home', $data);
        //$editor_data = $_POST['editor1'];

    }

}

