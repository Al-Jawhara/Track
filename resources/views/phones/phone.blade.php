@extends('layouts.app')
@section('title', 'Phones')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
     <div class="text-center">
    <h1>welcome to Aljawharah mobile store </h1>
    </br>
    @foreach ($sn as $item)
    <a href="{{ route($item) }}">{{ $item }}</a>
    <hr>
    @endforeach
</div>

@endsection