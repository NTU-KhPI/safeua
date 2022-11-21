<x-guest-layout>
    <div class="container">
        {{-- <h1>main photos</h1>
        
        @if (Route::has('login'))
            @auth
                <h2>your ID</h2>
                <p>{{ Auth::user()->id }}</p>
            @endauth
        @endif --}}

        <div class="section__grid">
            {{-- @foreach($photos as $photo) --}}
            <figure class="grid__items">
                    {{-- <img src="{{ asset('../img/'.$photo->filename) }}" alt="" class="items__img"> --}}
                    <img src="../img/slider1.jpg" alt="" class="items__img">
                    <figcaption class="grid__figcaption">grgrg</figcaption>
            </figure>
            {{-- @endforeach --}}
        </div>    
    </div>
</x-guest-layout>
