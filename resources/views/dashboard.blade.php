<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="title">Туры</h2>
            <div class="card-container main-page">
                @foreach($tours as $tour)
                <x-card-item :tour="$tour" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>