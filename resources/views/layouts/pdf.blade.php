<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <!-- favicon -->
    <!-- estilos -->

    <style>

        @page {
            margin: 0 0;
            size: 650px 531px landscape;
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
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
            font-size:1.6em;
            text-transform: uppercase;
        }

        .linea td {
            border-bottom: 2px solid black
        }
        .titulo {
            vertical-align: middle;
        }

        .cabeceranombre {
            font-size:3.8em; 
            vertical-align:middle;
            height:140px;
            text-transform: uppercase;
            letter-spacing: -0.05em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;            
            line-height: 1em;
        }

        .grandeuno {
            font-size: 3.7em;
            letter-spacing: -0.04em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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