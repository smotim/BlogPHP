<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

    }

    /**
     * Отображает страницу создания комментария
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($id){
        return view('comment.create', ['id' => $id  ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $comment = Comment::create([
            'post_id' => $request['post_id'],
            'comment' => $request['comment'],
            'user_name' => $request['name']
        ]);
        return redirect('/news/'.$request['post_id']);
    }

    /**
     * Находит комментарии для новости $id
     * @param $id
     * @return array
     */
    public function show($id){
        $commentsForNews = Comment::join('news','comments.post_id','=','news.id')
            ->where('news.id', $id)
            ->get();
        return $commentsForNews;
    }

}
