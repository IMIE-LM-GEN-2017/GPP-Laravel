@extends('templates.default')

@section('content')
    <h2>Enregistrement du compte</h2>

    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name">Prénom</label>
                <input id="first_name" type="text" name="first_name"
                       value="{{ old('first_name') }}" required autofocus>
                @if ($errors->has('first_name'))
                    <span>
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>


            <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name">Nom de famille</label>
                <input id="last_name" type="text" name="last_name"
                       value="{{ old('last_name') }}" required autofocus>
                @if ($errors->has('last_name'))
                    <span>
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username">Nom d'utilisateur (Ne pas mettre de pseudo)</label>
                <input id="username" type="text" name="username"
                       value="{{ old('username') }}" required autofocus>
                @if ($errors->has('username'))
                    <span>
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-field {{ $errors->has('is_teacher') ? ' has-error' : '' }}">
                <select name="is_teacher" value="{{old('is_teacher')}}">
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <label>Enseignant</label>
            </div>

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Adresse mail</label>
                <input id="email" type="email" name="email"
                       value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required>
                @if ($errors->has('password'))
                    <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                @endif
            </div>

            <label for="password-confirm">Confirmer le mot de passe</label>
            <input id="password-confirm" type="password" class=""
                   name="password_confirmation" required>

            <div class="form-group">
                <button type="submit" class="">
                    Enregistrement
                </button>
            </div>

        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection
