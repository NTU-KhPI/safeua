<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('home', [], false)}}">
                <img src="{{asset('img/logo.svg')}}" alt="">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name_f -->
            <div class="d-block d-lg-flex gap-3">
                <div class="w-full">
                    <x-input-label for="name_f" :value="__('user.name_f')"/>

                    <x-text-input id="name_f" class="block mt-1 w-full" type="text" name="name_f" :value="old('name_f')"
                                  required autofocus/>

                    <x-input-error :messages="$errors->get('name_f')" class="mt-2"/>
                </div>

                <!-- Name_s -->
                <div class="w-full mt-lg-0 mt-4">
                    <x-input-label for="name_s" :value="__('user.name_s')"/>

                    <x-text-input id="name_s" class="block mt-1 w-full" type="text" name="name_s" :value="old('name_s')"
                                  required autofocus/>

                    <x-input-error :messages="$errors->get('name_s')" class="mt-2"/>
                </div>
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('user.email')"/>

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required/>

                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('user.password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('user.confirm_password')"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('auth.already_registered') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('auth.register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
