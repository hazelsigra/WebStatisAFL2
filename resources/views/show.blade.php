@extends('Layout.MainLayout')

@section('container')
<div class="container">
    @error('insert_cart')
        @if (str_contains($message, 'ok'))
            <div class="alert alert-success" role="alert">Yeay! Item successfully added to cart.</div>
        @else
            <div class="alert alert-danger" role="alert">Oops! .</div>
        @endif
    @enderror
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

    <button class="btn btn-lg btn-outline-primary"><a href="/cart/set/{{ $menu['id'] }}" class="text-decoration-none text-reset">Add to cart</a></button>
@endsection