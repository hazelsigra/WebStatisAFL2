@extends('Layout.MainLayout')

@section('container')

<div class="homeDescription">

    <div class="text-center">
        <img src="images/sagomango.jpeg" width="800" >
    </div>

    <h1 class="text-center">{{$maintitle}}</h1><br>
    <p class="text-center">Welcome to Sago Mango, where the essence of tropical goodness is encapsulated in every product we offer. Sago Mango is a visionary company dedicated to bringing the finest quality mango products, incorporating the rich flavors of mangoes and the cultural significance of sago, to discerning consumers worldwide. Our commitment to excellence and innovation sets us apart in the food industry.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 py-5">
            <b>Vision:</b><br>
            <p>
                To be the global leader in providing premium mango-based products that capture the authentic taste of tropical indulgence while promoting sustainable and ethical business practices.
            </p>
        </div>
        <div class="col-md-6 py-5">
            <b>Mission: </b><br>
            <p>
                -> To craft high-quality mango products that satisfy the cravings of mango enthusiasts.<br>
                -> To foster sustainable agricultural practices, supporting local mango farmers and communities.<br>
                -> To promote the cultural significance of sago while incorporating it into our product range.<br>
                -> To consistently innovate and diversify our offerings, staying ahead of industry trends.
            </p>
        </div>
    </div>
</div>

<div class="text-center">
    <button type="button" class="btn btn-secondary btn-lg">See product  <a href="/product">--></a></button>
</div>

@endsection