@extends('templates.default')

@section('content')
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <div class="">Login</div>

                    <div class="">
                        <form class="" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
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

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
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
                                <div class="">
                                    <div class="">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir
                                            de moi
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="">
                                    <button type="submit" class="">
                                        Login
                                    </button>

                                    <a class="" href="{{ route('password.request') }}">
                                        Vous avez oublié votre mot de passe ?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
