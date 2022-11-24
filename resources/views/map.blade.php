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
</main>

<!-- Модальные элементы -->
<!-- Всплывающие подсказки по каждому региону -->
<div class="tooltip-regions">
    <div class="tooltip-regions__items">
        @include('map.regiondata')
    </div>
</div>

@endsection
