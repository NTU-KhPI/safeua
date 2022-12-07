<x-guest-layout>
    <div class="container">
        {{-- <h1>main photos</h1>
        
        @if (Route::has('login'))
            @auth
                <h2>your ID</h2>
                <p>{{ Auth::user()->id }}</p>
            @endauth
        @endif --}}

        <nav class="menu__photo">
            <a href="{{route('photos-index')}}" class="menu_photo_link active">Всі світлини</a>
            @php
                $lock = "locked"
            @endphp
            @if (Route::has('login'))
                @auth    
                    @php
                        $lock = "unlocked"
                    @endphp
                @endauth
            @endif
            <a href="{{route('my-photos')}}" class="menu_photo_link {{$lock}}">Мої світлини</a>
        </nav>

        @include('photo-archives.btn-publish-filters')

        <section class="section__photos">
            @if ($photos->count())
                <div class="section__grid">
                    @foreach ($photos as $photo)
                        <figure class="grid__items">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="items__img">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="back__img">
                            <figcaption class="items__figcaption">{{$photo->history->value('title')}}<hr>{{ $photo->region->title }}<hr>{{ $photo->created_at }}</figcaption>
                        </figure>
                    @endforeach
                </div>
                {{-- <button class="load_more">Показати ще</button> --}}
                @include('photo-archives.paginate')
            @else
                <p class="text-center">Нічого немає</p>
            @endif
            
        </section> 

        @include('photo-archives.modal-publish')
        @include('photo-archives.modal-photo')
    </div>
</x-guest-layout>