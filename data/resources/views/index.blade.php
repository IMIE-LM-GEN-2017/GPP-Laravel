@extends('templates.default')
@section('title', 'Gestionnaire de Planning et de Projets')
@section('content')

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
        <button type="submit" class="waves-effect waves-light btn green">
            Se connecter
        </button>
    </div>
@endsection