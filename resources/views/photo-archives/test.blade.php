<x-guest-layout>
    <div class="container">
        <h1>test photos</h1>
        
        @if (Route::has('login'))
            @auth
                <p>your ID: {{ Auth::user()->id }}</p>

                <div>
                    <form method="POST" action="{{ route('test.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="image">Завантажити фото</label>
                        <input type="file" class="form-control" name="image" /> <br>

                        <label for="user_id">User Id</label>
                        <input type="number" class="form-control " name="user_id" value="{{ Auth::user()->id }}" readonly/><br>

                        <label for="user_id">Description</label>
                        <input type="text" class="form-control" name="description" /><br>

                        <label for="user_id">Region</label>
                        <input type="text" class="form-control" name="region" /><br>
                        <button type="submit" class="btn btn-sm">Upload</button>
                    </form>        
                </div>
                <div>
                    @if ($photos->count())
                        <div>
                            @foreach ($photos as $image)
                                <img height="30" src="{{ asset('img/test/'.$image->filename) }}" /></br>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">No images yet. Please check back later.</p>
                    @endif
                </div>
            @endauth
        @endif
    </div>
</x-guest-layout>
