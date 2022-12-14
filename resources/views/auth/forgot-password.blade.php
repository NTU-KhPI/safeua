<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('home', [], false)}}">
                <img src="{{asset('img/logo.svg')}}" alt="">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('auth.forgot_password') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('user.email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('auth.email_password_reset_link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
