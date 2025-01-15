<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        <p class="text-blue-600 text-2xl font-medium text-center py-2">Авторизация</p>
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" :placeholder="__('Email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password"
                :placeholder="__('Password')" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex flex-col items-center justify-end mt-4 gap-5">

            <x-primary-button class="">
                {{ __('Войти') }}
            </x-primary-button>

            @if (Route::has('password.request'))
            <a class="underline text-sm text-blue-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Зарегистрировать') }}
            </a>
            @endif


        </div>
    </form>
</x-guest-layout>