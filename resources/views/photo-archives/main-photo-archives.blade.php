<x-guest-layout>
    <div class="container">
        <h1>main photos</h1>
        
        @if (Route::has('login'))
            @auth
                <h2>your ID</h2>
                <p>{{ Auth::user()->id }}</p>
            @endauth
        @endif
    </div>
</x-guest-layout>
