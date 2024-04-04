@props(['tour'])

<div>
    <p>
        {{$tour->name}}
    </p>
    <p>
        {{$tour->location}}
    </p>
    <p>
        {{$tour->price}} руб. с человека
    </p>
    <img src="{{asset($tour->img)}}" alt="" height="100" width="100">
</div>