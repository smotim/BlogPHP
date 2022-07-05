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
        return view('home',['news'=> DB::table('news')->whereNull('deleted_at')->latest()->paginate(3)]);
    }

}

