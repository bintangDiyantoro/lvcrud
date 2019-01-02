@extends('layouts.app')
    
@section('title')
{{$post->title}}
@endsection

@section('content')
<h1>{{$post->title}}</h1>
<p>{!! $post->body !!}</p> <!-- showing markup text -->
<form action="{{ route('post.destroy', $post->id)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <a href="{{ route('post.edit', $post->id)}}">Edit</a> | 
    <button type="submit" onclick="return confirm('Are you sure want to delete data with ID {{$post->id}}?')">Delete</button>
</form>
@stop