@extends('landing.layouts.landing')
@section('title', 'Services')
@section('content')
    <section class="page-heading">
        <p class="eyebrow">Escapadas para inspirarte</p>
        <h1>Services</h1>
        <p>Elige tu próximo destino y déjanos el resto a nosotros.</p>
    </section>

    <section class="card-grid" aria-label="Viajes disponibles">
        <x-card
            title="Lisboa"
            image="assets/images/lisboa.jpg"
            alt="Tranvía amarillo en una calle de Lisboa"
            price="Desde 390 €"
            duration="4 días"
            link="https://es.wikipedia.org/wiki/Lisboa"
            description="Calles con encanto, miradores sobre el Tajo y una gastronomía inolvidable."
        />
        <x-card
            title="París"
            image="assets/images/paris.jpg"
            alt="Torre Eiffel sobre el perfil de París"
            price="Desde 620 €"
            duration="5 días"
            link="https://es.wikipedia.org/wiki/Par%C3%ADs"
            description="Arte, paseos junto al Sena y rincones que invitan a volver."
        />
        <x-card
            title="Roma"
            image="assets/images/roma.jpg"
            alt="Coliseo romano al atardecer"
            price="Desde 540 €"
            duration="5 días"
            link="https://es.wikipedia.org/wiki/Roma"
            description="Historia, plazas llenas de vida y sabores clásicos de Italia."
        />
    </section>
@endsection