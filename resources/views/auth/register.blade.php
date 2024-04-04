<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="form-wrapper shadow">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Ваш логин')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Почта')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Пароль')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Повторите пароль')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center mt-4">
                        <x-primary-button>
                            {{ __('Зарегистрироваться') }}
                        </x-primary-button>

                        <a class="underline text-sm rounded-md focus:outline-none blue" href="{{ route('login') }}">
                            {{ __('Уже есть аккаунт') }}
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