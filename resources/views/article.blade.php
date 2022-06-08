@extends('layouts.app')
@section('content')

{{--<a href="{{ route('page.show', ['page' => $pages->id]) }}">ссылка</a>--}}
<h3><strong>{{$heading}}</strong></h3>
<p class="text-muted">
    <h5>{{ $summary}}</h5>
<div><img src="{{ asset('storage/image/news/origin/'.$image) }}" alt="" width="800"></div>
<p>{!! $article !!}</p>
</p>

@endsection
