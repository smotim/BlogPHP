<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $data['news'] = News::all();
        return view::make('home', $data);
        //$editor_data = $_POST['editor1'];

    }

}

