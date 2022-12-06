@section('title')Мапа@endsection

<x-app-layout>
    <!-- Страница с картой -->
    <section class="map-page">
        <div class="map-page__container container py-[50px] xl:py-10 md:py-8 sm:py-6">
            <!-- Карта -->
            <div class="map">
                @include('map.svgmap')
            </div>
        </div>
    </section>
    <!-- Модальные элементы -->
    <!-- Всплывающие подсказки по каждому региону -->
    <div class="tooltip-regions">
        <div class="tooltip-regions__items">
            @include('map.regiondata')
        </div>
    </div>
</x-app-layout>
