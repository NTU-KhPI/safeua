@section('title')Мої фото@endsection

<x-guest-layout>
    @if (Route::has('login'))
        @auth
    <div class="container">

        <nav class="menu__photo">
            <a href="{{route('photos-index')}}" class="menu_photo_link">Всі світлини</a>
            <a href="{{route('my-photos')}}" class="menu_photo_link active">Мої світлини</a>
        </nav>

        @include('photo-archives.btn-publish-filters')

        <section class="section__photos">
            @if ($photos->count())
                <div class="section__grid">
                    @foreach ($photos as $photo)
                        <figure class="grid__items">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="items__img">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="back__img">
                            {{-- <figcaption class="items__figcaption">{{$photo->history->value('title')}}</figcaption> --}}
                            <figcaption class="items__figcaption">{{$photo->history->value('title')}}<hr>{{ $photo->region->name }}<hr>{{ $photo->created_at }}</figcaption>
                        </figure>
                    @endforeach
                </div>
                {{-- <button class="load_more">Показати ще</button> --}}
                {{-- {{ $photos->links() }} --}}
                @include('photo-archives.paginate')

            @else
                <p class="text-center">Нічого немає</p>
            @endif            
        </section> 

        @include('photo-archives.modal-publish')
        @include('photo-archives.modal-photo')
    </div>

    @endauth
    @endif
</x-guest-layout>
