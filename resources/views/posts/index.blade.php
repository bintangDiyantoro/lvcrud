@extends('layouts.app')
    
@section('title')
Post Page
@endsection

@section('content')
    <h1>Post Data</h1>
    @if(count($posts)!=0)
        <ul>
        @foreach($posts as $post)
        <li>
        <a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a> 
        </li>
            
        @endforeach
        </ul>
    @else
        <h1>No Data Avalaible</h1>
    @endif
@stop