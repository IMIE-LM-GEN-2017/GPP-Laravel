@extends('templates.default')
@section('title', 'Enregistrement')

@section('content')

    <div class="center">
        <h2>Enregistrement du compte</h2>
        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <label for="first_name">Prénom</label>
                <input id="first_name" type="text" name="first_name" class="center"
                       value="{{ old('first_name') }}">
                @if ($errors->has('first_name'))
                    <strong>{{ $errors->first('first_name') }}</strong>
                @endif

                <label for="last_name">Nom de famille</label>
                <input id="last_name" type="text" name="last_name" class="center"
                       value="{{ old('last_name') }}">
                @if ($errors->has('last_name'))
                    <strong>{{ $errors->first('last_name') }}</strong>
                @endif

                <label for="username">Nom d'utilisateur</label>
                <input id="username" type="text" name="username" class="center"
                       value="{{ old('username') }}">
                @if ($errors->has('username'))
                    <strong>{{ $errors->first('username') }}</strong>
                @endif

                <label for="email">Adresse Mail</label>
                <input id="email" type="email" name="email" class="center"
                       value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif

                <select name="is_teacher" class="input-field center" value="{{old('is_teacher')}}" required
                        autofocus>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <label>Enseignant</label>

                <label for="password">Mot de passe</label>
                <input class="center" id="password" type="password" name="password" required>
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif

                <label for="password-confirm">Confirmer le mot de passe</label>
                <input class="center" id="password-confirm" type="password" name="password_confirmation"
                       required>

                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </div>

    <!--Selecteur-->
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection
