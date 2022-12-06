@foreach ($historiesByRegion as $historyByRegion)
@isset($historyByRegion)
<div class="region-tip-card" id="{{ $historyByRegion->region->name }}">
    <div class="region-tip-card__region-info">
        <h3 class="region-title">{{ Str::swap([
            'область' => 'обл.'
        ], $historyByRegion->region->title)  }}</h3>
    </div>
    <div class="region-tip-card__history-content">
        <div class="history-title mb-1 font-bold">{{ Str::limit($historyByRegion->title, 50) }}</div>
        <div class="history-desc">{{ Str::limit($historyByRegion->body, 150) }}</div>
        <div class="history-preview"><img src="{{ $historyByRegion->preview }}"
                alt="{{ $historyByRegion->region->name }}"></div>
    </div>
    <div class="region-tip-card__actions">
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
        <div class="region-tip-card__more"><a href="" class="more" target="_blank">Читати далі</a></div>
    </div>
</div>
@endisset
@endforeach
