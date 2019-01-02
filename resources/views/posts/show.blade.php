@extends('layouts.app')
    
@section('title')
{{$post->title}}
@endsection

@section('content')
<h1>{{$post->title}}</h1>
<p>{!! $post->body !!}</p> <!-- showing markup text -->
<a href="{{ route('post.edit', $post->id)}}">Edit</a>
@stop