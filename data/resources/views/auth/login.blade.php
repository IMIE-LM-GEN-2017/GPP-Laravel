@extends('templates.default')

@section('content')
                    <div class="">Login</div>

                        <form class="" method="POST" action="{{ route('menu') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="">Identifiant</label>

                                <input id="username" type="text" class="" name="username"
                                       value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="">Mot de passe</label>

                                    <input id="password" type="password" class="" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir
                                            de moi
                                        </label>

                                    <button type="submit" class="">
                                        Login
                                    </button>

                                    <a class="" href="{{ route('password.request') }}">
                                        Vous avez oublié votre mot de passe ?
                                    </a>

                        </form>

@endsection
