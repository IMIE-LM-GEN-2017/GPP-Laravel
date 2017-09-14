<html>
<head>
    <title>GPP - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link href="css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>

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

<!-- MENU DU HAUT / Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('TodolistAfaire')}}">A faire</a></li>
    <li class="divider"></li>
    <li><a href="{{route('TodolistEncours')}}">En cours</a></li>
    <li class="divider"></li>
    <li><a href="{{route('TodolistTermines')}}">Terminés</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">GPP</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('PlanningIndex')}}">Planning</a></li>
            <li><a href="{{route('IndexContact')}}">Contact</a></li>
            <li><a href="{{route('AdminPresenceIndex')}}">Presence</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">To Do List<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>

<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">GPP</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('PlanningIndex')}}">Planning</a></li>
            <li><a href="{{route('IndexContact')}}">Contact</a></li>
            <li><a href="{{route('AdminPresenceIndex')}}">Presence</a></li>
            <li><a href="{{route('TodolistIndex')}}">Todolist</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('PlanningIndex')}}">Planning</a></li>
            <li><a href="{{route('IndexContact')}}">Contact</a></li>
            <li><a href="{{route('AdminPresenceIndex')}}">Presence</a></li>
            <li><a href="{{route('TodolistIndex')}}">Todolist</a></li>
        </ul>
    </div>
</nav>

@yield('content')


</body>
</html>