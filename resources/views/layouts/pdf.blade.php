<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- oswald -->

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> -->
    
    <!-- favicon -->
    <!-- estilos -->
    <style>

        @page {
            margin: 0 0;
            size: 650px 531px landscape;
        }

        @font-face {
            font-family: 'oswald';
            src: url("{{ public_path('/resources/fonts/Oswald-Regular.ttf')}}") format('truetype');

        }

        body {
            width: 650px;
            /* max-height: 351px; */
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .active {
            font-weight: bold;
            color: red
        }

        .tablaetique {
            text-align: center;
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .tablaetique img {
            max-width: 100%;
        }

        .tercio td {
            width:33%;
        }

        .pequeuno {
            font-size: 1.8em;
        }

        .pequedos {
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
            font-size:1.5em;
            line-height: 1em;

        }

        .pequetres {
            /* font-family: 'Oswald', sans-serif; */
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
            font-size:1.6em
        }

        .linea td {
            border-bottom: 2px solid black
        }
        .titulo {
            vertical-align: middle;
        }

        .nombreprod {
            text-transform: uppercase;
            display: block;
            line-height: 2em;
        }

        .grandeuno {
            font-size: 3.7em;
            /* font-family: 'Oswald', sans-serif; */
            font-family: 'oswald', sans-serif;
        }

       

        
    </style>
</head>
<body>
    <!-- header -->
    @yield('content')
    <!-- footer -->
    <!-- script -->
</body>
</html>