@extends('templates.default')
@section('title', 'Gestionnaire de Planning et de Projets')
@section('content')

    <h1><img src="imie.png" width=" 200px" height="200px" alt="IMIE"></h1>
    <h2>Ecole de la filière numérique</h2>

    <form class="col s12" action="{{ route('menu') }}" method="POST" name="formconnexion">
    {{ csrf_field() }}
    <!--ID-->
        <div class="center">
            <div class="users">
                <div class="col s12{{ $errors->has('username') ? ' has-error' : '' }}">
                    <div class="input-field col s12">
                        <input value="{{ old('username') }}" id="username" class="validate"
                               placeholder="Nom d'utilisateur" name="username">
                    </div>
                    @if ($errors->has('username'))
                        <span>
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
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

        <center><a href="{{ route('password.request') }}">
            Vous avez oublié votre mot de passe ?
        </a></center>

        <!--Logout-->
        <center><a class="waves-effect waves-light btn green" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Se Déconnecter</a></center>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </form>
@endsection