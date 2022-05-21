@extends('layouts.app')
@section('content')

{{--<a href="{{ route('page.show', ['page' => $pages->id]) }}">ссылка</a>--}}
<h4><strong>{{$heading}}</strong></h4>
<p class="text-muted">
    {{ $summary}}
</p>
<button type="button" class="btn btn-primary">Read more</button>
@endsection
