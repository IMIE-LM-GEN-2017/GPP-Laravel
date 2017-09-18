<html>
<head>
    <title>GPP - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper">
        <a href="{{route('menu')}}" class="brand-logo">GPP</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('PlanningIndex')}}">Planning</a></li>
            <li><a href="{{route('IndexContact')}}">Contact</a></li>
            <li><a href="{{route('TodolistIndex')}}">Todolist</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form1').submit();">
                    Se Déconnecter</a>
                <form id="logout-form1" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('PlanningIndex')}}">Planning</a></li>
            <li><a href="{{route('IndexContact')}}">Contact</a></li>
            <li><a href="{{route('TodolistIndex')}}">Todolist</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form2').submit();">
                    Se Déconnecter</a>
                <form id="logout-form2" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>

@if (session('status'))
    {{ session('status') }}
@endif

@if(Session::has('message'))
    <div class="message">
        <div class="">Information</div>
        {{ session('message') }}
    </div>
@endif

<!-- Erreurs de validation -->
@if($errors->any())
    <div class="">Erreur de formulaire</div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@yield('content')

<script>$(".button-collapse").sideNav();</script>

</body>
</html>