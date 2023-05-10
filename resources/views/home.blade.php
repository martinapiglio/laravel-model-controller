<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container py-4">

        <h1 class="pb-3">Movies</h1>

        <table class="table">
    
            <thead class="table-dark">
                <tr>
                    <th scope="col">Movie Title</th>
                    <th scope="col">Movie Original Title</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
    
            <tbody>
                
                @foreach ($movies as $movie)
                    <tr>
                        <td>
                           <strong> {{ $movie->title }} </strong>  
                        </td>
                        <td>
                            {{ $movie->original_title }} 
                        </td>
                        <td class="text-capitalize">
                            {{ $movie->nationality }} 
                        </td>
                        <td>
                            {{ $movie->date }} 
                        </td>
                        <td>
                            {{ $movie->vote }} 
                        </td>
                    </tr>
                @endforeach
              
            </tbody>

        </table>

    </div>

</body>

</html>