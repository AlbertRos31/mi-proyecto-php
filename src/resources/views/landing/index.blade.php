@extends('landing.layouts.landing')
@section('title', 'Home')
@section('content')
    <section class="hero">
        <p class="eyebrow">Viaja, descubre, recuerda</p>
        <h1>El mundo te espera</h1>
        <p class="hero-copy">Creamos viajes para que disfrutes cada destino a tu manera.</p>
        <img class="hero-image" src="{{ asset('assets/images/agencia.jpg') }}" alt="Paisaje de costa con montañas y un avión">
        <a class="button" href="{{ route('services') }}">Explorar destinos</a>
    </section>
@endsection
