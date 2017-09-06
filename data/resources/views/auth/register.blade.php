@extends('templates.default')

@section('content')
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <div class="">Enregistrement du compte</div>

                    <div class="panel-body">
                        <form class="" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="">Identifiant</label>

                                <div class="">
                                    <input id="username" type="text" class="" name="username"
                                           value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="">Mot de passe</label>

                                <div class="">
                                    <input id="password" type="password" class="" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="">
                                <label for="password-confirm" class="">Confirmer le mot de passe</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class=""
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="">
                                        Enregistrement
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
