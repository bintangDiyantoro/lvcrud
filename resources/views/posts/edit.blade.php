@extends('layouts.app')
    
@section('title')
Edit {{$post->title}}
@endsection

@section('content')
<h1>Edit {{$post->title}}</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('post.update', $post->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <input type="text" name="title" placeholder="title" value="{{ $post->title }}"><br><br>
    <textarea name="body" placeholder="body" cols="30" rows="10">{{ $post->body }}</textarea><br><br>
    <button type="submit">Update</button>
</form>
@stop