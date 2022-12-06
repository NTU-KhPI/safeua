{{-- @extends('map.layout')

@section('title')Мапа@endsection

@section('content')

<main class="main">
    <!-- Страница с картой -->
    <section class="map-page">
        <div class="map-page__container container py-[75px] xl:py-16 lg:py-14 md:py-11 sm:py-9">
            <!-- Карта -->
            <div class="map">
                @include('map.svgmap')
            </div>
        </div>
    </section>
</main>

<!-- Модальные элементы -->
<!-- Всплывающие подсказки по каждому региону -->
<div class="tooltip-regions">
    <div class="tooltip-regions__items">
        @include('map.regiondata')
    </div>
</div>

@endsection --}}


<x-guest-layout>
    <main class="main">
        <!-- Страница с картой -->
        <section class="map-page">
            <div class="map-page__container container py-[80px] xl:py-16 lg:py-14 md:py-12 sm:py-11">
                <!-- Карта -->
                <div class="map">
                    @include('map.svgmap')
                </div>
            </div>
        </section>
        <section class="posts-page">
            <div
                class="posts-page__container container py-[70px] xl:py-14 lg:py-12 md:py-10 sm:py-8 gap-y-20 xl:gap-y-16 lg:gap-y-13 md:gap-y-10 sm:gap-y-8">
                <!-- Поиск -->
                <div class="posts-page__search">
                    <form action="" class="search-form">
                        <input type="text" value="" name="search-input" placeholder="Шукати історії" autocomplete="off"
                            class="">
                        <button><img src="{{ asset('img/map/map/search.svg') }}" alt="Поиск"></button>
                    </form>
                </div>
                <!-- Сортировка -->
                <div class="posts-page__sort sort">
                    <select name="" id="" class="sort__items">
                        <option value="" class="sort__item" selected>Найновіші</option>
                        <option value="" class="sort__item">Популярні</option>
                        <option value="" class="sort__item">За регіонами</option>
                        <option value="" class="sort__item">За кількістю донатів</option>
                    </select>
                </div>
    
                <!-- Посты -->
                <div class="posts-page__content">
                    <h2 class="content-title text-[42px] xl:text-[38px] lg:text-4xl md:text-[32px] sm:text-3xl">Останні
                        історії
                    </h2>
                    <div class="posts-page__posts">
                        @include('map.historydata')
                    </div>
                    <!-- Data Loader -->
                    <div class="mt-8 ajax-load hidden mx-auto w-10 h-10 lg:w-8 lg:h-8 lg:mt-6 md:w-6 md:h-6 md:mt-4">
                        <img src="{{ asset('img/loader.gif') }}" alt="Loading...">
                    </div>
                    @if (($histories->total() > 0) and ($histories->total() > $histories->count()))
                    <div class="posts-page__more"><button type="button" class="load-more">Більше постів</button></div>
                    @endif
                </div>
            </div>
    
            <script type="text/javascript">
                var pageNum = 1;
                    var ENDPOINT = "{{ route("map") }}"
                    $('.load-more').click(function() {
                            pageNum++;
                            loadMorePosts(pageNum);
                    });
                    function loadMorePosts(pageNum){
                        $.ajax(
                        {
                            url:ENDPOINT +'?page=' + pageNum,
                            type: "GET",
                            beforeSend: function()
                            {
                                $('.load-more').hide();
                                $('.ajax-load').show();
                            },
                        })
                        .done(function(data)
                        {
                            if(!(data.html)){
                                $('.ajax-load').html("No more records found");
                                $('.ajax-load').hide();
                                return;
                            }
                            $('.ajax-load').hide();
                            $('.load-more').show();
                            $(".posts-page__posts").append(data.html);
                        })
                        .fail(function(jqXHR, ajaxOptions, thrownError)
                        {
                            alert('Помилка завантаження постів!');
                        });
                    }
            </script>
        </section>
    </main>
    
    <!-- Модальные элементы -->
    <!-- Всплывающие подсказки по каждому региону -->
    <div class="tooltip-regions">
        <div class="tooltip-regions__items">
            @isset($regions)
            @foreach ($regions as $region)
            <div class="region" id="{{ $region->name }}">
                <div class="region__content">
                    <h3 class="region__title">{{ $region->title }}</h3>
                    <div class="region__desc">{{ Str::limit($region->desc, 230) }}</div>
                </div>
                <div class="region__image"><img src="{{ asset('img/map/regions/'.$region->photo) }}"
                        alt="{{ $region->title }}"></div>
                <div class="region__actions">
                    <a href="" class="like">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 47.5 47.5">
                            <title>Лайкнути</title>
    
                            <g transform="matrix(1.25 0 0 -1.25 0 47.5)">
                                <path fill="transparent" stroke="black"
                                    d="M3.067 25.68c0 8.799 12.184 12.06 15.933 1.874 3.749 10.186 15.933 6.925 15.933-1.874C34.933 16.12 19 3.999 19 3.999S3.067 16.12 3.067 25.68" />
                            </g>
                        </svg>
                    </a>
                    <a href="" class="donate">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <title>Задонатити</title>
    
                            <g>
                                <path fill="black"
                                    d="M320 640c-176.731 0-320-143.269-320-320s143.269-320 320-320v0c176.731 0 320 143.269 320 320s-143.269 320-320 320v0zM352 480h32c53.019 0 96-42.981 96-96s-42.981-96-96-96v0h-128.32c-17.673 0-32-14.327-32-32s14.327-32 32-32v0h192.32v-64h-96v-64h-64v64h-32c-53.019 0-96 42.981-96 96s42.981 96 96 96v0h128c17.673 0 32 14.327 32 32s-14.327 32-32 32v0h-192v64h96v64h64v-64z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <a href="" class="share">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 30 30">
                            <title>Поділитися</title>
    
                            <g>
                                <path
                                    d="M 23 3 A 4 4 0 0 0 19 7 A 4 4 0 0 0 19.09375 7.8359375 L 10.011719 12.376953 A 4 4 0 0 0 7 11 A 4 4 0 0 0 3 15 A 4 4 0 0 0 7 19 A 4 4 0 0 0 10.013672 17.625 L 19.089844 22.164062 A 4 4 0 0 0 19 23 A 4 4 0 0 0 23 27 A 4 4 0 0 0 27 23 A 4 4 0 0 0 23 19 A 4 4 0 0 0 19.986328 20.375 L 10.910156 15.835938 A 4 4 0 0 0 11 15 A 4 4 0 0 0 10.90625 14.166016 L 19.988281 9.625 A 4 4 0 0 0 23 11 A 4 4 0 0 0 27 7 A 4 4 0 0 0 23 3 z" />
                            </g>
                        </svg>
                    </a>
                    <div class="region__more"><a href="" class="more" target="_blank">Читати далі</a></div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</x-guest-layout>
