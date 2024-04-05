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
        <p class="price-row">
            <span>
                {{$tour->price}}
            </span>
            руб. с человека
        </p>
    </div>
</div>