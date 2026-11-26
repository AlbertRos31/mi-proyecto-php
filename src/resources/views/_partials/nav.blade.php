<nav>
    <a class="brand" href="{{ route('index') }}">Albert Viajes</a>
    <ul class="nav-links">
        <li><a href="{{ route('index') }}" @class(['active' => request()->routeIs('index')])>Home</a></li>
        <li><a href="{{ route('services') }}" @class(['active' => request()->routeIs('services')])>Services</a></li>
        <li><a href="{{ route('contact') }}" @class(['active' => request()->routeIs('contact')])>Contact</a></li>
    </ul>
</nav>