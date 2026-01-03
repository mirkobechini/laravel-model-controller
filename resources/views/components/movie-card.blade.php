<div class="card" >
    <div class="card-body">
        <h5 class="card-title">{{$movie["title"]}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">({{$movie["original_title"]}})</h6>
        <p class="card-text">{{$movie["nationality"]}}</p>
        <span class="card-text d-block">{{$movie["date"]}}</span>
    </div>
    <div class="card-footer bg-primary-subtle text-primary">
        <span class="card-text d-block">votestars(numero)</span>
    </div>
</div>