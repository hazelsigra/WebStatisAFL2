@extends('Layout.MainLayout')

@section('container')

<div class="text-center">
    <h2><b>CONTACT US</b></h2>
    <p>Connect with Us.</p>
</div>

<div class="row">
    <div class="col-md-4 py-3">
        <i class="fas fa-map-marker"></i><b> 93 Sae Headquarters</b><br>
        <p>Malang, Indonesia</p><br>
            
        <i class="fas fa-phone"></i><b> For inquiries, please contact:</b><br>
        <p>Phone: +62 823-4029-9420</p><br>
            
        <i class="fas fa-envelope"></i><b> Follow us on social media:</b><br>
        <p>Instagram: @kenyangbuncit_</p>
    </div>
    <div class="col-md-8 py-3">
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
                    <textarea name="inputMessage" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="text-center mt-3">
                    <a href="" target="blank"><button name="button_send" type="submit" class="btn btn-primary">Send Message</button></a>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>
@endsection
