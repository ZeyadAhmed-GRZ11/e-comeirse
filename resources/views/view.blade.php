@extends('welcome')
@section('route')


<section class="hero">
        <h1>Welcome to Dern-Support</h1>
        <p>We provide support services to help you succeed in Hardware problems.</p>
        <button class="btn"> <a href="{{ url('/home') }}" class="btn">Login Now</a></button>
       
    </section>


    <!-- Call-to-Action Section -->
    <section class="call-to-action">
        <h2>Get Started with Dern-Support Today!</h2>
    </section>


@endsection