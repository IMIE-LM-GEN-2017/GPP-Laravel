<html>
<head>
    <title>GPP - @yield('title')</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
<div class="">

    @if (session('status'))
        <div class="">
            {{ session('status') }}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="message">
            <div class="">Information</div>
            <div class="">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <!-- Erreurs de validation -->
    @if($errors->any())
        <div class="">
            <div class="">Erreur de formulaire</div>
            <div class="">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @yield('content')
</div>

</body>

</html>