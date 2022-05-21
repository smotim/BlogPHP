@extends('layouts.app')
@section('content')
<html lang="{'{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
<div class="row gx-5">
    <div class="col-md-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
        @foreach ($news  as $post)
            <h4><strong>{{ $post->heading}}</strong></h4>
            <p class="text-muted">
                {{ $post->user_name  }}
            </p>
            <button type="button" class="btn btn-primary">Read more</button>
        @endforeach
    </div>
</div>
<nav>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#" class="page-link" tabindex="-1">Previous</a></li>
        <li class="page-item active"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</nav>
</body>

@endsection

