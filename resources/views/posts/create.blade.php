@extends('layouts.app')

@section('title')
Create Post
@endsection

@section('content')
<h1>Create Post</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('store')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="title" value="{{ old('title') }}"><br><br>
    <textarea name="body" placeholder="body" cols="30" rows="10">{{ old('body') }}</textarea><br><br>
    <button type="submit">Submit</button>
</form>
@endsection