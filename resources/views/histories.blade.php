@section('title')Історії@endsection

<x-app-layout>

    {{-- Історії --}}
    <section class="histories-page">
        <div
            class="histories-page__container container py-[70px] xl:py-14 lg:py-12 md:py-10 sm:py-8 gap-y-20 xl:gap-y-16 lg:gap-y-13 md:gap-y-10 sm:gap-y-8">
            <!-- Поиск -->
            <div class="histories-page__search">
                <form action="{{ route('histories.search') }}" method="get"  class="histories-search-form">
                    <input type="text" id="histories_search" name="q" placeholder="Шукати історії" autocomplete="off"
                        class="">
                    <button type="submit"><img src="{{ asset('img/map/map/search.svg') }}" alt="Пошук"></button>
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
                <h2 class="content-title text-[42px] xl:text-[38px] lg:text-4xl md:text-[32px] sm:text-3xl">
                    @if(isset($regionName))
                    {{"Останні історії, пов'язані з ".'"'.$regionName.'"'}}
                    @elseif(isset($searchLine))
                        {{ 'Результати за запитом '.'"'.$searchLine.'"' }}
                    @else
                        {{'Останні історії'}}
                    @endif
                </h2>
                <div class="histories-page__histories">
                    @include('histories.historydata')
                </div>
                <!-- Data Loader -->
                <div id="histories-loader" class="loader hidden mt-8 mx-auto w-10 h-10 lg:w-8 lg:h-8 lg:mt-6 md:w-6 md:h-6 md:mt-4">
                    <img src="{{ asset('img/loader.gif') }}" alt="Loading...">
                </div>
                @if (($histories->total()) > 0 and ($histories->count() < $histories->total()))
                <div class="histories-page__more"><button type="button" class="load-more" id="btn-more-histories">Більше історій</button></div>
                @endif
            </div>
        </div>
        @isset($uri)
        <script type="text/javascript">
            var currentPage = 1;
                $('#btn-more-histories').click(function() {
                    currentPage++;
                    loadMoreHistories(currentPage);
                });
                function loadMoreHistories(currentPage){
                    $.ajax(
                    {
                        @if(isset($regionId))
                        @if(Str::contains($uri, '?'))
                        url:'{{ url($uri, $regionId) }}&page=' + currentPage,
                        @else
                        url:'{{ url($uri, $regionId) }}?page=' + currentPage,
                        @endif
                        @else
                        @if(Str::contains($uri, '?'))
                        url:'{{ url($uri) }}&page=' + currentPage,
                        @else
                        url:'{{ url($uri) }}?page=' + currentPage,
                        @endif
                        @endif

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
                        console.log(data.pageContent);
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
        @endisset
    </section>

</x-app-layout>
