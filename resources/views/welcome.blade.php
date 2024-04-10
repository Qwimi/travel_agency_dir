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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="title">Горячие туры</h2>
            <div class="card-container main-page">
                @foreach($tours as $tour)
                <x-card-item :tour="$tour" />
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="title">Фотогалерея</h2>
            <div class="img-container">
                @foreach($images as $image)
                <div class="img-wrapper">
                    <img src="{{$image->url}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>