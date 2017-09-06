@extends('templates.default')
@



@section('content')
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="js/materialize.js">
        <link rel="stylesheet" href="css/style.css">
        <title>Gestionnaire de planning et de projets</title>
    </head>
    <body>
    <h1><img src="imie.png" alt="IMIE"></h1>
    <h2>Ecole de la filière numérique</h2>

    <!--ID-->
    <div style="text-align: center;">
        <div class="users">
            <div class="col s12">
                <form class="col s12" action="" method="POST" name="formconnexion">
                    <div class="input-field col s12">
                        <input id="username" class="validate" placeholder="Votre Identifiant" name="username">
                    </div>
            </div>

            <!--Pass-->
            <div class="col s12">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate" placeholder="Votre mot de passe" name="password">
                    <label for="password"></label>
                </div>
            </div>
        </div>
    </div>
    <!--Bouton envoyer-->
    <div class="envoieusers">
        <button class="btn waves-effect waves-light green">
            <input type="submit" name="connexion" value="Connexion">
        </button>
    </div>
    </body>
@endsection