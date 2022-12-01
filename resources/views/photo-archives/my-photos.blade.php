<x-guest-layout>
    @if (Route::has('login'))
        @auth
    <div class="container">

        
    
             

        <nav class="menu__photo">
            <a href="" class="menu_photo_link">Всі світлини</a>
            <a href="" class="menu_photo_link active">Мої світлини</a>          
        </nav>

        <div class="menu__filters">
            <form action="#zatemnenie" method="GET">
                <button class="open-window-button">Поділитися світлиною</button>                
            </form>
            <form action="">
                <select name="sort_photos" class="btn__filters">
                    <option class="btn__option__filters" value="" disabled selected>Сортувати</option>
                    <option value="firstNewOnes">Спочатку нові</option>
                    <option value="firstOldOnes">Спочатку старі</option>
                </select>
                <select name="filter_photos" class="btn__filters">
                    <option value="" disabled selected>Фільтрувати</option>
                    <option value="firstNewOnes">Регіон</option>
                    <option value="firstOldOnes">Час</option>
                </select>
            </form>
        </div>

        <section class="section__photos">
            @if ($history->count())
                <div class="section__grid">
                    @foreach ($history as $item)
                        @if ($item->user()->value('user_id') == Auth::user()->user_id)
                            <figure class="grid__items">
                                <img src="{{ asset($item->photo->value('file_location')) }}" alt="" class="items__img">
                                <img src="{{ asset($item->photo->value('file_location')) }}" alt="" class="back__img">
                                <figcaption class="items__figcaption">{{$item->title}}</figcaption>
                            </figure>
                        @endif                  
                    @endforeach
                </div>
                <button class="load_more">Показати ще</button>
            @else
                <p class="text-center">Нічого немає</p>
            @endif
            
        </section> 
        @if (Route::has('login'))
            @auth
                <div id="zatemnenie">
                    <div id="okno">
                        <div class="title_row_window">
                            <a href="#" class="close"><div class="triangle-left"></div></a>
                            <div class="title-of-window">Поділитися світлиною</div>
                        </div>
                        <form class="form_window" method="POST" action="{{ route('photo-archives.store') }}" enctype="multipart/form-data">
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
       
    @endauth
    @endif
</x-guest-layout>