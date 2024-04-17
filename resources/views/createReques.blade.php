<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="form-wrapper shadow">
                <form method="POST" action="{{ route('request.store') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Частота приемов пищи')" />
                        <x-select-input id="name" class="block mt-1 w-full" :options='$food' name="name" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Тип размещения')" />
                        <x-select-input id="name" class="block mt-1 w-full" :options='$hotel' name="name" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="flex items-center mt-4">
                        <x-primary-button>
                            {{ __('Отправить') }}
                        </x-primary-button>
                    </div>
                </form>

                <div class="img-wrapper">
                    <img src="{{asset($tour->img)}}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>