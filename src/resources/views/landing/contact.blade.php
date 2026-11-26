@extends('landing.layouts.landing')
@section('title', 'Contact')
@section('content')
    <section class="page-heading">
        <p class="eyebrow">Estamos para ayudarte</p>
        <h1>Contact de Albert</h1>
        <p>Cuéntanos qué viaje tienes en mente y te ayudaremos a prepararlo.</p>
    </section>

    <section class="contact-grid" aria-label="Información de contacto">
        <div class="contact-details">
            <h2>Hablemos de tu próximo viaje</h2>
            <p><strong>Teléfono:</strong> <a href="tel:+34900123456">+34 123 456 789</a></p>
            <p><strong>Email:</strong> <a href="mailto:hola@horizonteviajes.example">albert@horizonteviajes.es</a></p>
            <p><strong>Dirección:</strong> C/Alacant, NUM PRIVADO, Tavernes Blanques</p>
            <p class="note">Datos de ejemplo para esta actividad.</p>
        </div>
        <img class="map-image" src="{{ asset('assets/images/mapa.svg') }}" alt="Mapa esquemático con la ubicación de Horizonte Viajes en Madrid">
    </section>
@endsection