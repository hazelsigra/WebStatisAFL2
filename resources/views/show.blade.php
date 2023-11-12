@extends('Layout.MainLayout')

@section('container')
    <h1>{{$maintitle}} </h1>

    <img src="../{{ $writer['photo']}}" style="width: 250px">

    <h2>Name : {{ $writer['name'] }}</h2>
    <h3>Contact : {{ $writer['contact'] }}</h3>

@endsection