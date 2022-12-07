<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('home', [], false)}}">
                <img src="{{asset('img/logo.svg')}}" alt="">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('user.password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('common.confirm') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
