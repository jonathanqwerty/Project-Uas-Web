<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Kampus Ku</title>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h2>WELCOME</h2>
            <h1>KAMPUS KU</h1>
        </div>
        <div class="subjudul">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="kiri">Log
                        in</a>

                @endauth

            @endif

        </div>
    </div>
</body>

</html>
