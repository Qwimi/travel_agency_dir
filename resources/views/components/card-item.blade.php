@props(['tour'])

<div class="card-item shadow">
    <div class="img-wrapper">
        <img src="{{asset($tour->img)}}" alt="">
    </div>
    <div class="card-description">
        <p class="card-title">
            {{$tour->name}}
        </p>
        <p>
            {{$tour->location}}
        </p>
        <div class="price-row">
            <div>
                <p class="price">
                    {{$tour->price}} руб.
                </p>
                <!-- <p class="per-human">
                    руб. с человека
                </p> -->
            </div>
            @if (Auth::check())
            <div>
                <a href="{{route('req', ['id' => $tour->id])}}" class="link-like-button">Еду!</a>
            </div>
            @endif
        </div>
    </div>
</div>