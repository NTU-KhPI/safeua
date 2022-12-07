@section('title')Головна@endsection

<x-app-layout>

    <div id="hero">
        <div id="hero-slider" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"
                     style="
                 background: url({{asset('img/main.jpg')}}) center center no-repeat; background-size: cover;
                 width: 100%;
                 height: 100%;
                ">
                    <div class="carousel-item-back" style="background: linear-gradient(37.26deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%); width: 100%; height: 100%">
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-5">
                                    <h2 class="mb-3 fw-black text-white">ЩО ТАКЕ SAFE UA</h2>
                                    <p class="text-white">
                                        SafeUA - це проєкт, створений в першу чергу на поширення історій людей про те,
                                        що вони пережили, як постраждали їхні регіони від військового вторгнення росії на територію України.
                                    </p>
                                    <button class="btn btn-primary mt-4">Поділитися історією</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"
                     style="
                 background: url({{asset('img/help/fon2.jpg')}}) center center no-repeat; background-size: cover;
                 width: 100%;
                 height: 100%;
                ">
                    <div class="carousel-item-back" style="background: linear-gradient(37.26deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%); width: 100%; height: 100%">
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-5">
                                    <h2 class="mb-3 fw-black text-white">ЩО ТАКЕ SAFE UA</h2>
                                    <p class="text-white">
                                        SafeUA - це проєкт, створений в першу чергу на поширення історій людей про те,
                                        що вони пережили, як постраждали їхні регіони від військового вторгнення росії на територію України.
                                    </p>
                                    <button class="btn btn-primary mt-4">Поділитися історією</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


</x-app-layout>
