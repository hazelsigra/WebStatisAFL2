@extends('Layout.MainLayout')

@section('title', $maintitle)
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
        @foreach ($writers as $writer)
            <tr>
                <td><a href="/writer/{{ $writer['id'] }}">{{ $writer['name'] }}</a></td>
                <td>{{ $writer['contact']}}</td>
                <td>{{ $writer['country']}}</td>
                <td>
                    <img src="{{ $writer['photo']}}" style="width: 100px">
                </td>

            </tr>
        @endforeach
       
    </tbody>

</table>
</div>
@endsection