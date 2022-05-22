<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function page($id){
        $page = News::find($id);
        $title = $page->title;
        $user_name = $page->user_name;
        $heading = $page->heading;
        $summary = $page->summary;
        $article = $page->content;
        $created_at = $page->created_at;
        $image = $page->image;

        return view('article', [
            'title' => $title,
            'summary' => $summary,
            'user_name' => $user_name,
            'heading' => $heading,
            'article' => $article,
            'created_at' => $created_at,
            'page' => $id,
            'image' => $image
        ]);
    }
}
