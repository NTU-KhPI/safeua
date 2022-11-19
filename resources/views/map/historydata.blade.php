@forelse ($histories as $history)
<div class="posts-page__post post post-{{$history->id}}">
    <div class="post-decor post-decor_left"
        style="background: url('{{ asset('img/map/posts/post-decor-left.png') }}') 0 0/contain no-repeat">
    </div>
    <div class="post-decor post-decor_right"
        style="background: url('{{ asset('img/map/posts/post-decor-right.png') }}') 0 0/contain no-repeat">
    </div>
    <div class="post__body">
        <div class="sender">
            <a href="" class="sender-photo">
                <img src="{{ asset('img/users/'.$history->user->avatar) }}" alt="{{ $history->user->name }}">
            </a>
            <div class="sender-data">
                <a href="" title="Перейти на профіль" class="sender-name">{{ $history->user->name }}</a>
                <a href="" title="Перейти до історій пов'язаних з цим регіоном" class="sender-location">{{
                    $history->region->title }}</a>
            </div>
        </div>
        <div class="post__image">
            <img src="{{ $history->preview }}" alt="{{ $history->title }}">
        </div>
        <div class="post__block-text block-text">
            <h3 class="block-text__title">{{ $history->title }}</h3>
            <div class="block-text__content">{{ $history->body }}</div>
        </div>
    </div>
    <div class="post__footer">
        <div class="post__actions actions">
            <button type="button" class="action views">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 80.794 80.794" style="enable-background:new 0 0 80.794 80.794;"
                    xml:space="preserve">
                    <title>Перегляди</title>
                    <g>
                        <g>
                            <path d="M79.351,38.549c-0.706-0.903-17.529-22.119-38.953-22.119c-21.426,0-38.249,21.216-38.955,22.119L0,40.396l1.443,1.847
                                    c0.706,0.903,17.529,22.12,38.955,22.12c21.424,0,38.247-21.217,38.953-22.12l1.443-1.847L79.351,38.549z M40.398,58.364
                                    c-15.068,0-28.22-13.046-32.643-17.967c4.425-4.922,17.576-17.966,32.643-17.966c15.066,0,28.218,13.045,32.642,17.966
                                    C68.614,45.319,55.463,58.364,40.398,58.364z" />
                            <path
                                d="M40.397,23.983c-9.052,0-16.416,7.363-16.416,16.414c0,9.053,7.364,16.417,16.416,16.417s16.416-7.364,16.416-16.417
                                    C56.813,31.346,49.449,23.983,40.397,23.983z M40.397,50.813c-5.744,0-10.416-4.673-10.416-10.417
                                    c0-5.742,4.672-10.414,10.416-10.414c5.743,0,10.416,4.672,10.416,10.414C50.813,46.14,46.14,50.813,40.397,50.813z" />
                        </g>
                    </g>
                </svg>
                <span class="action__value" id="views-count">{{ $history->views }}</span>
            </button>
            <button type="button" class="action likes">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 47.5 47.5">
                    <title>Лайкнути</title>
                    <g transform="matrix(1.25 0 0 -1.25 0 47.5)">
                        <path fill="transparent" stroke="black"
                            d="M3.067 25.68c0 8.799 12.184 12.06 15.933 1.874 3.749 10.186 15.933 6.925 15.933-1.874C34.933 16.12 19 3.999 19 3.999S3.067 16.12 3.067 25.68" />
                    </g>
                </svg>
                <span class="action__value" id="likes-count">{{ $history->likes }}</span>
            </button>
            <button type="button" class="action shares">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 30 30">
                    <title>Поділитися</title>
                    <g>
                        <path
                            d="M 23 3 A 4 4 0 0 0 19 7 A 4 4 0 0 0 19.09375 7.8359375 L 10.011719 12.376953 A 4 4 0 0 0 7 11 A 4 4 0 0 0 3 15 A 4 4 0 0 0 7 19 A 4 4 0 0 0 10.013672 17.625 L 19.089844 22.164062 A 4 4 0 0 0 19 23 A 4 4 0 0 0 23 27 A 4 4 0 0 0 27 23 A 4 4 0 0 0 23 19 A 4 4 0 0 0 19.986328 20.375 L 10.910156 15.835938 A 4 4 0 0 0 11 15 A 4 4 0 0 0 10.90625 14.166016 L 19.988281 9.625 A 4 4 0 0 0 23 11 A 4 4 0 0 0 27 7 A 4 4 0 0 0 23 3 z" />
                    </g>
                </svg>
                <span class="action__value" id="shares-count">{{ $history->shares }}</span>
            </button>
            <button type="button" class="action donate">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <title>Задонатити</title>
                    <g>
                        <path fill="black"
                            d="M320 640c-176.731 0-320-143.269-320-320s143.269-320 320-320v0c176.731 0 320 143.269 320 320s-143.269 320-320 320v0zM352 480h32c53.019 0 96-42.981 96-96s-42.981-96-96-96v0h-128.32c-17.673 0-32-14.327-32-32s14.327-32 32-32v0h192.32v-64h-96v-64h-64v64h-32c-53.019 0-96 42.981-96 96s42.981 96 96 96v0h128c17.673 0 32 14.327 32 32s-14.327 32-32 32v0h-192v64h96v64h64v-64z">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
        <div class="post__date"><span class="md:hidden">Дата публікації: </span><time id="post-time"
                datetime="{{ $history->updated_at }}">{{
                $history->updated_at->format('d F, H:i') }}</time>
        </div>
    </div>
</div>
@empty
@if(($histories->total() <= 0) or ($histories->total() < $histories->count()))
        <div class="exception text-red-800 text-3xl xl:text-2xl lg:text-xl md:text-lg  mt-8 xl:mt-5 md:mt-3">Постів не
            знайдено або сталася помилка</div>
        @endif
        @endforelse
