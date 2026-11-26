@props([
    'title',
    'image',
    'alt',
    'price',
    'duration',
    'link',
    'description',
])

<div class="card">
    <h2>{{ $title }}</h2>
    <img class="card-image" src="{{ asset($image) }}" alt="{{ $alt }}">
    <div class="card-body">
        <p class="trip-details"><strong>{{ $price }}</strong><span>{{ $duration }}</span></p>
        <p>{{ $description }}</p>
        <a class="text-link" href="{{ $link }}" target="_blank" rel="noopener noreferrer">Descubrir {{ $title }}</a>
    </div>
</div>