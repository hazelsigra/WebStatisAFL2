@extends('Layout.MainLayout')

@section('container')
    <h1>{{$maintitle}} </h1>

    <img src="../{{ $menu['photo']}}" style="width: 250px">

    <h2>Name : {{ $menu['name'] }}</h2>
    <h3>Description : {{ $menu['description'] }}</h3>

@endsection