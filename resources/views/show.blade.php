@extends('Layout.MainLayout')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="../images/{{ $menu['photo']}}">
        </div>
        <div class="col-md-6 px-5">
            <h2>Name : {{ $menu['name'] }}</h2>
            <h2>Description : {{ $menu['description'] }}</h2>        
        </div>
    </div>
</div>

@endsection