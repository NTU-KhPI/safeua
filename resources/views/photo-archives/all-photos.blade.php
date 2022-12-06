<x-guest-layout>
    <div class="container">
        {{-- <h1>main photos</h1>
        
        @if (Route::has('login'))
            @auth
                <h2>your ID</h2>
                <p>{{ Auth::user()->id }}</p>
            @endauth
        @endif --}}

        <nav class="menu__photo">
            <a href="{{route('photos-index')}}" class="menu_photo_link active">Всі світлини</a>
            @php
                $lock = "locked"
            @endphp
            @if (Route::has('login'))
                @auth    
                    @php
                        $lock = "unlocked"
                    @endphp
                    
                @endauth
            @endif
            <a href="{{route('my-photos')}}" class="menu_photo_link {{$lock}}">Мої світлини</a>
        </nav>

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
                        <button class="dropdown-item-sort dropdown-item" type="button">Спочатку нові</button>
                        <button class="dropdown-item-sort dropdown-item" type="button">Спочатку старі</button>
                    </div>
                </div>
                {{-- <div class="dropdown-group">
                    <button type="button" class="btn-menu-filter dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Фільтр
                    </button>
                    <div class="dropdown-menu-filter dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item-filter dropdown-item" type="button">Регіон</button>
                        <button class="dropdown-item-filter dropdown-item" type="button">Час</button>
                    </div>
                </div> --}}
            </div>
        </div>

        <section class="section__photos">
            @if ($photos->count())
                <div class="section__grid">
                    @foreach ($photos as $photo)
                        <figure class="grid__items">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="items__img">
                            <img src="{{ asset($photo->file_location) }}" alt="" class="back__img">
                            <figcaption class="items__figcaption">{{$photo->history->value('title')}}</figcaption>
                        </figure>
                    @endforeach
                </div>
                {{-- <button class="load_more">Показати ще</button> --}}
                @include('photo-archives.paginate')
            @else
                <p class="text-center">Нічого немає</p>
            @endif
            
        </section> 

        {{-- Модальне вікно додавання історії з фото --}}
        @if (Route::has('login'))
            @auth
                <div id="zatemnenie">
                    <div id="okno">
                        <div class="title_row_window">
                            <a href="#" class="close"><div class="triangle-left"></div></a>
                            <div class="title-of-window">Поділитися світлиною</div>
                        </div>
                        <form class="form_window" method="POST" action="{{route('photos-store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="main_block_window">
                                <div class="block_img_window">
                                    <input class="file_upload"  type="file" class="form-control" name="filename" accept="image/*" onchange="loadFile(event)"/>
                                    <img class="file_view" id="output"/>
                                    <script>
                                        var loadFile = function(event) {
                                            document.querySelector(".file_upload").style.display = "none";
                                            var output = document.getElementById('output');
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                            output.onload = function() {
                                            URL.revokeObjectURL(output.src) // free memory
                                            }
                                        };
                                    </script>
                                </div>
                                <div class="block_description">
                                    <div class="profile-with-description">
                                        <div class="block_profile">
                                            <input type="number" style="display: none" class="form-control " name="user_id" value="{{ Auth::user()->user_id }}" readonly/>
                                            <div class="profile-with-text">{{ Auth::user()->name_f }}</div>
                                        </div>
                                        <textarea class="description" type="text" name="description" placeholder="Додайте короткий опис..."></textarea>
                                    </div>
                                    <div class="profile-with-location">
                                        {{-- <input type="number" class="form-control" name="region_id" /><br> --}}
                                        <select name="region_id" class="select_region">
                                            <option value="" disabled selected>Додайте розташування...</option>
                                            @foreach ($regions as $region)
                                                <option value="{{ $region->region_id }}">{{$region->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="profile-with-publication">
                                        <button type="submit" style="background-color: #4169E1" class="button-2" >ПУБЛІКАЦІЯ</button>
                                    </div>
                                </div>
                            </div>                            
                        </form>
                        </div>
                    </div> 
                </div>  
            @endauth
        @endif
    </div>
</x-guest-layout>