@extends('map.layout')

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
    <section class="histories-page">
        <div
            class="histories-page__container container py-[70px] xl:py-14 lg:py-12 md:py-10 sm:py-8 gap-y-20 xl:gap-y-16 lg:gap-y-13 md:gap-y-10 sm:gap-y-8">
            <!-- Поиск -->
            <div class="histories-page__search">
                <form action="" class="search-form">
                    <input type="text" id="map-page-search" name="map-page-search" placeholder="Шукати історії" autocomplete="off"
                        class="">
                    <button><img src="{{ asset('img/map/map/search.svg') }}" alt="Поиск"></button>
                </form>
            </div>
            <!-- Сортировка -->
            <div class="histories-page__sort sort">
                <select name="" id="" class="sort__items">
                    <option value="" class="sort__item" selected>Найновіші</option>
                    <option value="" class="sort__item">Популярні</option>
                    <option value="" class="sort__item">За регіонами</option>
                    <option value="" class="sort__item">За кількістю донатів</option>
                </select>
            </div>

            <!-- Посты -->
            <div class="histories-page__content">
                <h2 class="content-title text-[42px] xl:text-[38px] lg:text-4xl md:text-[32px] sm:text-3xl">Останні
                    історії
                </h2>
                <div class="histories-page__histories">
                    @include('map.historydata')
                </div>
                <!-- Data Loader -->
                <div id="histories-loader" class="loader hidden mt-8 mx-auto w-10 h-10 lg:w-8 lg:h-8 lg:mt-6 md:w-6 md:h-6 md:mt-4">
                    <img src="{{ asset('img/loader.gif') }}" alt="Loading...">
                </div>
                @if ($histories->count() > 0)
                <div class="histories-page__more"><button type="button" class="load-more" id="btn-more-histories">Більше істроій</button></div>
                @endif
            </div>
        </div>

        <script type="text/javascript">
            var currentPage = 1;
                $('#btn-more-histories').click(function() {
                    currentPage++;
                        loadMoreHistories(currentPage);
                });
                function loadMoreHistories(currentPage){
                    $.ajax(
                    {
                        url:'{{ route("map") }}?page=' + currentPage,
                        type: "GET",
                        beforeSend: function()
                        {
                            $('#btn-more-histories').hide();
                            $('#histories-loader').show();
                        },
                    })
                    .done(function(data)
                    {
                        if(!(data.pageContent)){
                            $('#histories-loader').html("На жаль, історії закінчились");
                            $('#histories-loader').hide();
                            return;
                        }
                        $('#histories-loader').hide();
                        $(".histories-page__histories").append(data.pageContent);
                        if(currentPage < data.lastPage){
                            $('#btn-more-histories').show();
                        }
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
        @include('map.regiondata')
    </div>
</div>

@endsection
