@extends('layouts.app')
@section('content')
<html lang="{'{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>


    <div class="col-md-6 mb-4">
        <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
        @foreach ($news  as $post)
            <div><img src="{{ asset('storage/image/news/origin/'.$post->image) }}" alt="Картинка к новости" width="800"></div>
            <h4><strong>{{ $post->heading}}</strong></h4>
            <h6>{{$post->summary}}</h6>
            <p class="text-muted">
                Автор: {{ $post->user_name  }}
            </p>
            <a type="button" href="/news/{{$post->id}}" class="btn btn-primary" >Read more</a>
        @endforeach
    </div>
</div>
    {{ $news->links('vendor.pagination.simple-bootstrap-4')}}

</body>

@endsection

