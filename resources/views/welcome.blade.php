<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokedex</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <style>
        #pato {
            position: absolute;
            display: flex;
            justify-content: center;
            background-image: url('images/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-blend-mode: luminosity;
            background-size: cover;
            height: 100vh;
            width: 100vw;
        }

        #trip
         {
            top: 45%;
            left: 32%;
            align-self: center;
            width: 700px;
            opacity: 70%;
            text-align-last: center;
            height: 1px;
        }

    </style>
</head>
<body>
    <main>
        <div id='pato'>
            <div id='trip'>
            <form class="form-code" action="{{url('pokemon')}}" method="post">
                @csrf
                <input class="form-control" type="text" placeholder="Procurar Pokemon" aria-label="default input example" name="Search">
            </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
