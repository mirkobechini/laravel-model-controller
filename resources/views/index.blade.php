<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    @extends("layouts.master")

    @section("content")
    <div class="container py-5">
        <div class="row row-cols-3 g-4">

            @foreach($movies as $movie)
            <div class="col">
                <x-movie-card :movie="$movie" />
            </div>
            @endforeach


        </div>
    </div>
    @endsection

</body>

</html>