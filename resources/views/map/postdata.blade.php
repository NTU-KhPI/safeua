@csrf
@forelse ($posts as $post)
<div class="posts-page__post post post-{{$post->id}}">
    <div class="post-decor post-decor_left"
        style="background: url('{{ asset('img/map/posts/post-decor-left.png') }}') 0 0/contain no-repeat">
    </div>
    <div class="post-decor post-decor_right"
        style="background: url('{{ asset('img/map/posts/post-decor-right.png') }}') 0 0/contain no-repeat">
    </div>
    <div class="post__body">
        <div class="sender">
            <a href="" class="sender-photo">
                <img src="{{ asset('img/map/posts/post1/sender.png') }}" alt="">
            </a>
            <div class="sender-data">
                <a href="" title="Перейти на профіль" class="sender-name">Ігор Кононенко</a>
                <a href="" title="Перейти до історій пов'язаних з цим регіоном" class="sender-location">Запоріжжя</a>
            </div>
        </div>
        <div class="post__image">
            <img src="{{ $post->preview }}" alt="{{ $post->title }}">
        </div>
        <div class="post__block-text block-text">
            <h3 class="block-text__title">{{ $post->title }}</h3>
            <div class="block-text__desc">{{ $post->text_content }}</div>
        </div>
    </div>
    <div class="post__footer">
        <div class="post__actions">
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
        </div>
        <div class="post__date">Дата публікації: <time id="post-time" datetime="2022-10-10T21:20">вчора</time></div>
    </div>
</div>
@empty
<div class="exception text-red-800 text-3xl xl:text-2xl lg:text-xl md:text-lg  mt-8 xl:mt-5 md:mt-3">
    Постів не знайдено або сталася помилка</div>
@endforelse
