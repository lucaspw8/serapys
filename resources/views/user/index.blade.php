@extends('templates.menu')
@section('content')
    <div class="row">
        <div class="col-md-6 text-center pt-5">
            <h1>We respect your beliefs</h1>
            <div class="d-flex justify-content-center my-5">
                <img src="{{asset('logo.png')}}" alt="logo Serapys">
            </div>
            <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et mollis ex, 
                vel pharetra neque. Aenean nibh orci, interdum vel massa a, 
                tempus pulvinar turpis. Morbi venenatis ornare mauris sed dictum. 
                Vivamus sed dolor a risus faucibus dignissim. 
                Duis varius dolor quis ante bibendum pellentesque. Ut et dui vitae magna blandit rutrum. Maecenas consectetur libero eu tincidunt pharetra. 
                Mauris euismod, ligula sed sodales dapibus, ex sapien egestas justo, 
                nec suscipit urna odio in nisl. Duis vel nibh ut purus interdum eleifend. 
                Aenean varius viverra purus, ut aliquam quam facilisis vitae.</p>
        </div>
        <div class="col-md-6">
            <img class="img-fluid d-sm-none d-md-block" src="{{asset('oracao.jpg')}}" alt="pray">
        </div>
    </div>
@endsection