@extends('layouts.app')

@section('title', 'Comics')  

@section('content')
    <h2>i miei fumetti</h2>
    @foreach ($fumetti as $fumetto)
        <img src=" {{$fumetto['thumb']}}">
        {{ $fumetto['series'] }}
        <br/>
    @endforeach
@endsection
