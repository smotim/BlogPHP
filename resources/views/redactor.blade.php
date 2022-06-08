@extends('layouts.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <form method="POST" action="/post/publish" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value="{{Auth::user()->name}}">
        <p><input name="article" id="article"></p>
        <p><textarea name="summary" id="summary" cols="40" rows="2"></textarea></p>
        <p><textarea name="content" id="content" cols="60" rows="5"></textarea></p>
        <p><input type="file" class="form-control-file" id="image" name="image"></p>
        <p><input type="submit"></p>

    </form>
    <div><button id="bold">Bold Text</button></div>
    <div><button id="cursive">Cursive</button></div>
    <script type="text/javascript">
        var bold_active = false
        $('#bold').click(function (){
            if(!bold_active){
                $('#content').val($('#content').val() + '<strong>')
            }
            else {
                $('#content').val($('#content').val() + '</strong>')
            }
            bold_active = !bold_active
        })
        var cursive = false
        $('#cursive').click(function (){
            if(!cursive){
                $('#content').val($('#content').val() + '<i>')
            }
            else {
                $('#content').val($('#content').val() + '</i>')
            }
            cursive = !cursive
        })
    </script>
@endsection
