@section('title')Всі фото@endsection

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
            <a href="" class="menu_photo_link active">Всі світлини</a>
            <a href="" class="menu_photo_link">Мої світлини</a>
        </nav>

        <form class="menu__filters" action="">
            <select name="sort_photos" class="btn__filters">
                <option class="btn__option__filters" value="" disabled selected>Сортувати</option>
                <option value="firstNewOnes">Спочатку нові</option>
                <option value="firstOldOnes">Спочатку старі</option>
            </select>
            <select name="filter_photos" class="btn__filters">
                <option value="" disabled selected>Фільтрувати</option>
                <option value="firstNewOnes">Регіон</option>
                <option value="firstOldOnes">Час</option>
            </select>
        </form>

        <section class="section__photos">
            @if ($history->count())
                <div class="section__grid">
                    @foreach ($history as $hist)
                        <figure class="grid__items">
                            <img src="{{ asset($hist->preview) }}" alt="" class="items__img">
                            <img src="{{ asset($hist->preview) }}" alt="" class="back__img">
                            <figcaption class="items__figcaption">{{$hist->title}}</figcaption>
                        </figure>
                    @endforeach
                </div>
                <button class="load_more">Показати ще</button>
            @else
                <p class="text-center">Нічого немає</p>
            @endif

        </section>
    </div>
</x-guest-layout>
