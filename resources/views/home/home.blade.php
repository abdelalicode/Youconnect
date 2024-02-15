@extends('app')


@section('posts')

@foreach ($posts as $post)
@include('home.includes.posts')
@endforeach

@endsection




@section('suggestion')
@for ($i = 0; $i < 3; $i++)
@include('home.includes.suggestion')

@endfor

@endsection

