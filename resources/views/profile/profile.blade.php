@section('title')
    Профіль
@endsection
{{--@section('styles')<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">@endsection--}}
{{--@section('scripts') <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>@endsection--}}

<x-app-layout>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            {{--                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"--}}
                            {{--                                 class="rounded-circle img-fluid" style="width: 150px;">--}}

                            <div
                                style="width: 100px; height: 100px; border-radius: 50px; background: url({{asset('img/users/'.$user->avatar)}}) center center no-repeat; background-size: cover; margin: 0 auto"></div>
                            <h5 class="my-3">{{$user->name_f . ' ' . $user->name_s}}</h5>
                            {{--                            <p class="text-muted mb-1">Simple ukrainian boy</p>--}}
                            {{--                            <p class="text-muted mb-4">Kharkiv district</p>--}}
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Завантажити фото</button>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="card mb-4 mb-lg-0">--}}
                    {{--                        <div class="card-body p-0">--}}
                    {{--                            <ul class="list-group list-group-flush rounded-3">--}}
                    {{--                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                    {{--                                    <i class="fas fa-globe fa-lg text-warning"></i>--}}
                    {{--                                    <p class="mb-0">https://mdbootstrap.com</p>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                    {{--                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>--}}
                    {{--                                    <p class="mb-0">mdbootstrap</p>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                    {{--                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>--}}
                    {{--                                    <p class="mb-0">@mdbootstrap</p>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                    {{--                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>--}}
                    {{--                                    <p class="mb-0">mdbootstrap</p>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                    {{--                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>--}}
                    {{--                                    <p class="mb-0">mdbootstrap</p>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col-lg-8">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('profile.update')}}" method="post">
                        @csrf
                        <div class="card mb-4">
                            <div class="card-body">
                                {{--                            <div class="row py-3">--}}
                                {{--                                <div class="col-sm-3">--}}
                                {{--                                    <p class="mb-0">Username</p>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-sm-9">--}}
                                {{--                                    <p class="text-muted mb-0">@username</p>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                                {{--                            <hr>--}}
                                <div class="row py-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">{{__('user.name_f')}}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_f" class="profile-input"
                                               placeholder="{{__('user.name_f_placeholder')}}" value="{{$user->name_f}}"
                                               required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row py-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">{{__('user.name_s')}}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_s" class="profile-input"
                                               placeholder="{{__('user.name_s_placeholder')}}" value="{{$user->name_s}}"
                                               required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row py-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">{{__('user.email')}}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="profile-input"
                                               placeholder="{{__('user.email_placeholder')}}" value="{{$user->email}}"
                                               required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row py-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">{{__('user.phone')}}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="profile-input"
                                               placeholder="{{__('user.phone_placeholder')}}" value="{{$user->phone}}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row py-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">{{__('user.region')}}</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="region_id" class="profile-input">
                                            <option value="0">{{__('common.not_chosen')}}</option>
                                            @foreach($regions as $region)
                                                <option value="{{$region->region_id}}"
                                                        @if($region->id === $user->region_id) selected @endif>{{$region->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4">{{__('common.about_me')}}</p>
                                        <textarea class="profile-input" name="about_me"
                                                  placeholder="Розкажіть про себе">{{$user->about_me}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="row mb-4">--}}
                        {{--                            <div class="col-md-12">--}}
                        {{--                                <div class="card mb-4 mb-md-0">--}}
                        {{--                                    <div class="card-body">--}}
                        {{--                                        <p class="mb-4"> Тут буде моя галерея :)</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        @if(count($histories))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p class="mb-4">{{__('common.my_histories')}}</p>
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-lg-4">
                                                @foreach($histories as $history)
                                                    <div class="col">
                                                        <a href="{{route('history', ['id' => $history->history_id], false)}}">
                                                            <img src="{{$history->preview}}" alt="preview">
                                                            <h4>{{$history->title}}</h4>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-4">{{__(('common.save'))}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
