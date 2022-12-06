@if ($photos->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="pagination_block">
        {{-- Previous Page Link --}}
        @if ($photos->onFirstPage())
            <span class="pagination_previousPage onFirstPage">Попередні фото</span>
        @else
            <a href="{{ $photos->previousPageUrl() }}" rel="prev" class="pagination_previousPage">Попередні фото</a>
        @endif

        {{-- Number Pages Links --}}
        @php
            $countPages = $photos->lastPage()
        @endphp
        <div class="pagination_number_links">
            @for ($i = 1; $i <= $countPages; $i++)
                @if ($photos->currentPage() == $i)
                    <a href="{{ $photos->url($i) }}" rel="prev" class="pagination_numberPages currentPage">{{$i}}</a>
                @else
                    <a href="{{ $photos->url($i) }}" rel="prev" class="pagination_numberPages">{{$i}}</a>
                @endif
            @endfor
        </div>
        {{-- Next Page Link --}}
        @if ($photos->hasMorePages())
            <a href="{{ $photos->nextPageUrl() }}" rel="next" class="pagination_nextPage">Наступні фото</a>
        @else
            <span class="pagination_nextPage onLastPage">Наступні фото</span>
        @endif
    </nav>
@endif