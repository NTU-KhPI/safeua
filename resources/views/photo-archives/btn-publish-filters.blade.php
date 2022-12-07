@php
    $lock = "locked"
@endphp
@php
    $curentRoute = Route::currentRouteName()
@endphp
@if ($curentRoute == "photos-index")
    @php $curentRouteDesc = $curentRoute . "-sortDesc" @endphp
@else
    @if ($curentRoute == "photos-index-sortDesc")
        @php $curentRouteDesc = $curentRoute @endphp
        @php $curentRoute = "photos-index" @endphp
    @endif
    @if ($curentRoute == "my-photos")
        @php $curentRouteDesc = $curentRoute . "-sortDesc" @endphp
    @else
        @if ($curentRoute == "my-photos-sortDesc")
            @php $curentRouteDesc = $curentRoute @endphp    
            @php $curentRoute = "my-photos" @endphp
        @endif
    @endif
@endif


@if (Route::has('login'))
    @auth    
        @php
            $lock = "unlocked"
        @endphp
    @endauth
@endif
<div class="menu__filters">
    <form action="#zatemnenie" method="GET">
        <button class="open-window-button {{$lock}}">Поділитися світлиною</button>                
    </form>
    <div class="filters">
        <div class="dropdown-group">
            <button type="button" class="btn-menu-sort dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Сортувати
            </button>
            <div class="dropdown-menu-sort dropdown-menu">
                <a href="{{route($curentRoute)}}" class="dropdown-item-sort dropdown-item" type="button">Спочатку нові</a>
                <a href="{{route($curentRouteDesc)}}" class="dropdown-item-sort dropdown-item">Спочатку старі</a>
            </div>
        </div>
        {{-- <div class="dropdown-group">
            <button type="button" class="btn-menu-filter dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Регіон
            </button>
            <div class="dropdown-menu-filter dropdown-menu">
                @if ($regions->count())
                    @foreach ($regions as $region)
                        @php
                            $region_name = $region->region_id
                        @endphp
                        <a href="{{route("photos-index-filter", $region_name)}}" class="dropdown-item-filter dropdown-item" type="button">{{ $region->name}}</a>
                    @endforeach
                @else
                    <span class="dropdown-item-filter dropdown-item">Немає регіонів</span>
                @endif
            </div>
        </div> --}}
    </div>
</div>