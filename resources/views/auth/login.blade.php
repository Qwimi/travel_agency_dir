<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="form-wrapper shadow">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Почта')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Пароль')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center mt-4">

                        <x-primary-button>
                            {{ __('Войти') }}
                        </x-primary-button>

                        <a class="underline text-sm rounded-md focus:outline-none blue" href="{{ route('register') }}">
                            {{ __('Ещё нет аккаунта?') }}
                        </a>
                    </div>
                </form>

                <div class="img-wrapper">
                    <img src="{{asset('images/image9.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>