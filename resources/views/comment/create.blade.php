@extends('layouts.app')
@section('content')
    <form method="POST" action="/post/comment/store" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value="{{Auth::user()->name}}">
        <input type="hidden" name="post_id" value="{{$id}}">
        <p><textarea name="comment" id="comment" cols="60" rows="5"></textarea></p>
        <p><input type="submit"></p>

    </form>
@endsection
