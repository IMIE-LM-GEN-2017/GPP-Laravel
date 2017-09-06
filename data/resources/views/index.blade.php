@extends('templates.default')
@section('title', 'Gestionnaire de Planning et de Projets')
@section('content')

    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="js/materialize.js">
    <link rel="stylesheet" href="css/style.css">

    <h1><img src="imie.png" width=" 200px" height="200px" alt="IMIE"></h1>
    <h2>Ecole de la filière numérique</h2>

    <!--ID-->
    <div class="center">
        <div class="users">
            <div class="col s12">
                <form class="col s12" action="" method="POST" name="formconnexion">
                    <div class="input-field col s12">
                        <input id="username" class="validate" placeholder="Nom d'utilisateur" name="username">
                    </div>
                </form>
            </div>

            <!--Pass-->
            <div class="col s12">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate" placeholder="Mot de passe"
                           name="password">
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
@endsection