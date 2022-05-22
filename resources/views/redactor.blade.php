@extends('layouts.app')
@section('content')
    <form method="POST" action="/post/publish">
        @csrf
        <input type="hidden" name="name" value="{{Auth::user()->name}}">
        <p><input name="article"></p>
        <p><textarea name="summary" cols="40" rows="2"></textarea></p>
        <p><textarea name="content" cols="60" rows="5"></textarea></p>
        <p><input type="submit"></p>
        <label for="image">Картинка для новости</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </form>
@endsection
