@extends('Layout.MainLayout')

@section('container')

<div class="container">
    <div class="text-center">
        <h4>93 Sae</h4>
        <p>Kue Kering dari Surabaya, Indonesia</p>
      </div>
    <div class="row">
        @foreach ($menus as $menu)
          <div class="col-md-3 my-3">
            <div class="card shadow">
              <div class="wrapper-card-blog">
                <img src="/images/{{ $menu['photo']}}" class="img-card-blog">
              </div>
              <div class="p-3">
                <a href="/menu/{{ $menu['id'] }}" class="text-decoration-none"><h5>{{ $menu['name'] }}</h5></a>
                <p>{{ $menu['description']}}
                  <a href="/menu/{{ $menu['id'] }}">Selengkapnya &rightarrow;</a>
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
</div>
@endsection