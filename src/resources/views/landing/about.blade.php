{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
</head>
<body>
    <h1>Sobre nosotros</h1>
</body>
</html>--}}
@extends('landing.layouts.landing')
@section('title', 'Sobre nosotros')
@section('header')
    
<h1>Sobre nosotros</h1>
@endsection
@section('content')
    
<p>Información sobre nuestra empresa.</p>

<x-alert type="success" title="¡Listo!" class="mb-4">
  Los cambios se guardaron correctamente.
  
<x-slot:actions>
    
<a href="{{ route('index') }}" class="underline">Volver</a>
  
</x-slot:actions>
</x-alert>
@endsection