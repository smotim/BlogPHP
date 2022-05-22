<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index(){
        return view('redactor');
    }

    public function store(Request $request){
        $data = $request->all();
//
        $filename    = $data['image']->getClientOriginalName();
//
//        //Сохраняем оригинальную картинку
        $data['image']->move(Storage::path('/public/image/news/').'origin/',$filename);
//
//        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/image/news/').'origin/'.$filename);
        $thumbnail->fit(300, 300);
        $thumbnail->save(Storage::path('/public/image/news/').'thumbnail/'.$filename);
//
//        //Сохраняем новость в БД
        $data['image'] = $filename;
//        News::create($data);

        $news = new News([
            'heading' => $data['article'],
            'summary' => $data['summary'],
            'user_name' => $data['name'],
            'content' => $data['content'],
            //'image' => $data['image']
        ]);
        $news->save();
        return redirect('/news');
    }
}
