@extends('app')


@section('content')

<div class="grid grid-cols-7 h-screen">
    <div class="col-span-1 bg-red-200">
      01
    </div>
    <div class="col-span-5 flex flex-col">
      <div class="bg-blue-200 h-1/4">
        02
      </div>
      <div class="bg-green-200 flex-grow">
        03
      </div>
    </div>
    <div class="col-span-1 bg-red-200">
      04
    </div>
</div>

  
  
  
  @endsection