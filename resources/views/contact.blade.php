@extends('Layout.MainLayout')

@section('container')
<h1>{{$pagetitle}}</h1>
<div class="row">
    <div class="col-md-4 py-5">
        <b>Sago Mango Headquarters</b><br>
        <p>123 Tropical Avenue, <br>
            Mango City, Tropica</p><br>
            
        <b>For inquiries, please contact:</b><br>
        <p>Email: info@sagomango.com <br>
            Phone: +123 4567 8901</p><br>
            
        <b>Follow us on social media:</b><br>
        <p>Facebook: @SagoMangoOfficial <br>
            Instagram: @SagoMango <br>
            Twitter: @SagoMangoTweet</p>
    </div>
    <div class="col-md-8 py-5">
        <form method="POST" action="" class="w-100 mx-auto">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputUniName">Enter your name</label>
                    <input type="text" class="form-control" name="inputUniName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" name="inputAddress">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputCity">Phone</label>
                    <input type="text" class="form-control" name="inputCity">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPhone">Message</label>
                    <input type="text" class="form-control" name="inputPhone">
                </div>
            </div>
            <br>
            <button name="button_register" type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>
@endsection
