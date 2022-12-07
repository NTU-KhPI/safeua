<x-app-layout>
    <div class="main-bg" style="width: 100%; min-height: calc(100vh - 92px); height: auto; padding-top: 92px;">
        <div class="preview-bg d-flex align-items-center" style="background: url({{$history->preview}}) center center no-repeat; background-size: cover; min-height: calc(100vh - 92px)">
            <div class="container">
                <h3>{{$history->title}}</h3>
            </div>

        </div>
    </div>
    <div class="container py-4">
        <p>
            {{$history->body}}
        </p>
    </div>
</x-app-layout>
