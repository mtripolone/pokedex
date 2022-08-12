<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokedex</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <style>
        body {
            position: absolute;
            background-image: url('images/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }

        #trip
        {
            top: 18%;
            left: 42%;
            width: 400px;
            height: 500px;
            background-color: rgb(185, 185, 185);
            position: absolute;
            border-radius: 5%;
        }

        #circle {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 15%;
            height: 124%;
            border-radius: 50%;
            background-color: rgb(251, 0, 0);
            margin: 50px;
            top: -154%;
            left: 71.7%;
            border: inset;
        }


        #img {
            border: inset;
            background-color: white;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            margin-top: -190px;
            background-image: url({{$sprites['other']['official-artwork']['front_default']}});
            width: 340px;
            height: 250px;
            position: absolute;
            top: 52%;
            left: 7.5%;
            border-radius: 5%;
        }

        #nameId {
            position: absolute;
            top: 4%;
            left: 7.5%;
            width: 340px;
            height: 35px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
        }

        p {
            position: relative;
            top: 68%;
            left: 7.5%;
            border: solid;
            width: 85%;
            border-radius: 5px;
            padding: 4px;
        }

        h4 {
            margin-left: 9px;
            margin-top: 1px;
        }
    </style>
</head>
<body>
    <main>
        <div id='trip'>
            <div id='nameId'>
                <h4>{{$name}}</h4>
                <div id='circle'>{{$id}}</div>
            </div>
            <div id='img'> </div>
            <p>HP: {{$stats['0']['base_stat']}} </p>
            <p>Attack: {{$stats['1']['base_stat']}} </p>
            <p>Defense: {{$stats['2']['base_stat']}}</p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
