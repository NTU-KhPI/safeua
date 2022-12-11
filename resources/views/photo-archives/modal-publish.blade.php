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