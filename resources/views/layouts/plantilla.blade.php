<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active {
            font-weight: bold;
            color: red
        }

        .tablaetiquetas td {
            padding: 0.2em;
            margin: 0;
            border:1px solid gray;
        }
    </style>
    
    <script>
        
        // en la siguiente función, el argumento es input, pero en el html es this
        // dentor de la misma comprobamos si la id es la que queremos... llamando a la propiedad id del input (o de this)
        // gracias a este condicional podemos usar la funcuión en más sitios
        // pero no hace lo que queremos

        // function modificar(input) {
        //     var id = input.id;
        //     if (id == "inputpeso") {
        //         document.getElementById("inputprecio").value =(4000*input.value)/2.25; 
        //     }
        // }

        // function modificar(input) {
        //      document.getElementById("inputprecio").value =(4000*input.value)/2.25; 
        // }

        function mmoddos() {
            var valueuno = document.getElementById('inputpeso').value;
            var valuedos = document.getElementById('inputpreciokilo').value;
            if ((isNaN(valueuno)==false) && (isNaN(valuedos) == false)) {
                document.getElementById("inputprecio").value = valueuno * valuedos;
            }
        }
       
    
     </script>


</head>
<body>
    <!-- header -->
    @include('layouts/partials/header')

    @yield('content')
    <!-- footer -->
    @include('layouts/partials/footer')


    <!-- script -->

    <script>

            // crea un nuevo objeto `Date`
            var today = new Date();
            
            // obtener la fecha de hoy en formato `MM/DD/YYYY`
            var now = today.toLocaleDateString('es-ES');

            // cambiando el fopr4mato apra adecuarlo al formulario
            var nownow = now.split('/').reverse().join('-');

            // estableciendo la fecha de envasado actual
            document.getElementById("fechaenvasado").value=nownow;

            // caducidad: seis meses

            var tresmeses = 1000 * 60 * 60 * 24 * 180;
            var suma = today.getTime() + tresmeses;
            var dentrodetresmeses = new Date(suma);
            
            var dentrodetres = dentrodetresmeses.toLocaleDateString('es-ES');
            
            var dentrodedentrode = dentrodetres.split('/');

            // ajuste necesario para meses de un sólo digíto...
            // si noe stá oprecedidos de 0, no es compatible con el form

            if (dentrodedentrode[1].length<2) {
                dentrodedentrode[1]=0+dentrodedentrode[1];
            }

            var dentrodedentrode =  dentrodedentrode.reverse().join('-');
            document.getElementById("fechacaducidad").value=dentrodedentrode;

    </script>

</body>
</html>