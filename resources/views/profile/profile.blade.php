@section('title')Профіль@endsection
@section('styles')<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">@endsection
@section('scripts') <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>@endsection

<x-app-layout>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
{{--                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"--}}
{{--                                 class="rounded-circle img-fluid" style="width: 150px;">--}}
                            <div style="width: 100px; height: 100px; border-radius: 50px; background: rebeccapurple; margin: 0 auto"></div>
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
                                    <p class="mb-0">Ім'я</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="name_f" class="profile-input" placeholder="Введіть ваше ім'я" value="{{$user->name_f}}" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row py-3">
                                <div class="col-sm-3">
                                    <p class="mb-0">Прізвище</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="name_s" class="profile-input" placeholder="Введіть ваше прізвище" value="{{$user->name_s}}" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row py-3">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="profile-input" placeholder="Введіть ваш email" value="{{$user->email}}" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row py-3">
                                <div class="col-sm-3">
                                    <p class="mb-0">Телефон</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="profile-input" placeholder="Введіть ваш телефон" value="{{$user->phone}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row py-3">
                                <div class="col-sm-3">
                                    <p class="mb-0">Регіон</p>
                                </div>
                                <div class="col-sm-9">
                                    <select name="region_id" class="profile-input">
                                        <option value="0">Не вибрано</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->region_id}}" @if($region->id === $user->region_id) selected @endif>{{$region->name}}</option>
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
                                        <p class="mb-4">About me</p>
                                        <textarea class="profile-input" name="about_us" placeholder="Розкажіть про себе">{{$user->about_us}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"> Тут буде моя галерея :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"> А тут історії :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-emerald-500">Dick</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
