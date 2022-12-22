<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
    <!-- anton -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    
    <!-- favicon -->
    <!-- estilos -->
    <style>

        body {
            max-width: 650px;
            max-height: 351px;
            margin: 0;
            padding: 0
        }
        .active {
            font-weight: bold;
            color: red
        }

        .tablaetique {
            text-align: center;
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
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
            font-family: 'Oswald', sans-serif;
            font-size:1.3em;
            line-height: 1em;

        }

        .pequetres {
            font-family: 'Oswald', sans-serif;
            font-size:1.6em
        }

        .linea td {
            border-bottom: 1px solid black
        }

        .nombreprod {
            text-transform: uppercase;
        }

        .grandeuno {
            font-size: 3.75em;
            font-weight: bold;
            font-family: 'Oswald', sans-serif;
            line-height: 1em;

        }

        @media print {
  @page { margin: 0; }
  body { margin: 2cm; }
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