<x-app-layout>
    <div class="py-12">
        <div class="banner max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="content-wrapper">
                <h1 class="title">Открой мир с <span>Travelcy</span></h1>
                <p>Впечатления, которые навсегда останутся в вашем сердце.</p>
                <x-primary-button>
                    {{ __('В путь!') }}
                </x-primary-button>
            </div>
            <div class="img-wrapper">
                <img src="{{asset('images/image9.jpg')}}" alt="">
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="banner max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @foreach($tours as $tour)
            <x-card-item :tour="$tour" />
            @endforeach
        </div>
    </div>
</x-app-layout>