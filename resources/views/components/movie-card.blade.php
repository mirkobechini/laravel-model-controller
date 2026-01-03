<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$movie["title"]}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">({{$movie["original_title"]}})</h6>
        <p class="card-text text-body-secondary">{{$movie["nationality"]}}</p>
        <span class="card-text text-body-secondary d-block">{{$movie["date"]}}</span>
    </div>
    <div class="card-footer bg-primary-subtle text-primary border-top border-dark">
        <span class="card-text d-block">
            @for ($i=0; $i<10; $i++)
                @if ($movie["vote"]>= $i)
                <i class="bi bi-star-fill"></i>
                @elseif ($movie["vote"] >= $i - 0.5)
                <i class="bi bi-star-half"></i>
                @else
                <i class="bi bi-star"></i>
                @endif
            @endfor
        ({{$movie["vote"]}})
    </span>
    </div>
</div>