@extends('app')


@section('posts')


  
@foreach ($posts as $post)
@include('home.includes.posts')
@endforeach

@endsection




@section('suggestion')


@if ($followees !== null)

@foreach ($followees as $followee)
    

@include('home.includes.suggestion')

@endforeach
@else

<h5>{{  "No Suggestions at the moment!" }}</h5>
@endif



@endsection

