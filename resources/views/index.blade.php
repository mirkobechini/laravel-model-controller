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
    <div class="container">

        movie list
        <ul>
            @foreach($movies as $movie)
            <li>
                {{$movie["title"]}}
            </li>    
            @endforeach
        </ul>
    </div>
    @endsection

</body>

</html>