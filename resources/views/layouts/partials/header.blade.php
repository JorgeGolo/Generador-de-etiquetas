<header>
<!-- nav -->
    <nav>
        <ul>
            <!-- <li><a href="{{route('home')}}">Home</a>  @dump(request()->routeIs('home')) </li> -->
            <!-- <li><a href="{{route('home')}}">Home</a>  {{request()->routeIs('home')? 'active' : 'false'}} </li> -->
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active' : 'false'}}">Home</a> </li>
            <li><a href="{{route('etiquetas.index')}}" class="{{request()->routeIs('etiquetas.*')? 'active' : 'false'}}">Etiquetas</a></li>
            <li><a href="{{route('productos.index')}}" class="{{request()->routeIs('productos.*')? 'active' : 'false'}}">Productos</a></li>
            <li><a href="{{route('marcas.index')}}" class="{{request()->routeIs('marcas.*')? 'active' : 'false'}}">Marcas</a></li>
        </ul>
    </nav>

</header>