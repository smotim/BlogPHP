<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleDeleteController extends Controller
{
    public function page($id){
        $id = News::find( $id );
        $date = Carbon::now();
        $diff = $id->created_at->diffInHours($date);
        if ($diff<24)
            $id ->delete();
    }
}
