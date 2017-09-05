<html>
<head>
    <title>Blog321 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.css"/>
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css"
          integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">

    <!-- Add the CSRF token in a meta tag to have it easily in JS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    @component('admin') @endcomponent

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="message">
            <div class="message-header">Information</div>
            <div class="message-body">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <h1 class="title">@yield('title')</h1>

    <!-- Erreurs de validation -->
    @if($errors->any())
        <div class="message is-danger">
            <div class="message-header">Erreur de formulaire</div>
            <div class="message-body">
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {
                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);
                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }

    });
</script>
</body>
</html>