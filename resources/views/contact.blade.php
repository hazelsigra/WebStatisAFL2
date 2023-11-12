@extends('Layout.MainLayout')

@section('container')
<h1>{{$maintitle}}</h1>
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
                    <label for="inputName">Enter your name</label>
                    <input type="text" class="form-control" name="inputName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" name="inputEmail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Phone</label>
                    <input type="text" class="form-control" name="inputPhone">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputMessage">Message</label>
                    <input type="text" class="form-control" name="inputMessage">
                </div>
            </div>
            <br>
            <button name="button_send" type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>
@endsection
