@extends('Layout.MainLayout')

@section('container')

<div class="container">
    <h1>{{$maintitle}} </h1>
<table class="table table-striped">
    <thead>  
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
    </tr>
    </thead>

    <tbody>
        @foreach ($menus as $menu)
            <tr>
                <td><a href="/menu/{{ $menu['id'] }}">{{ $menu['name'] }}</a></td>
                <td>{{ $menu['type']}}</td>
                <td>{{ $menu['description']}}</td>
                <td>
                    <img src="{{ $menu['photo']}}" style="width: 100px">
                </td>

            </tr>
        @endforeach
       
    </tbody>

</table>
</div>
@endsection