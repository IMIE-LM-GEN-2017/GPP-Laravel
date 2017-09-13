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

@yield('content')

</body>
</html>