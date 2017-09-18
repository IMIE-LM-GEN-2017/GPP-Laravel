@extends('templates.default')

@section('content')
    <div class="">Nouveau mot de passe</div>

    <form class="" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="">Adresse Mail</label>

            <input id="email" type="email" class="" name="email"
                   value="{{ $email or old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="">Mot de passe</label>

            <input id="password" type="password" class="" name="password" required>

            @if ($errors->has('password'))
                <span class="">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="">Confirmer le mot de passe</label>
            <input id="password-confirm" type="password" class=""
                   name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="">
            Nouveau mot de passe
        </button>
    </form>
@endsection
