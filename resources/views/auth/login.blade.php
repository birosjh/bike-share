@extends('wrapper')

@section('wrapped-content')
        <div class="title is-2">Login</div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="field{{ $errors->has('email') ? ' is-danger' : '' }}">
                <label for="email" class="label">E-Mail Address</label>
                <div class="control">
                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="field{{ $errors->has('password') ? ' is-danger' : '' }}">
                <label for="password" class="label">Password</label>
                <div class="control">
                    <input id="password" type="password" class="input" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary">
                        Login
                    </button>
                    <a class="button is-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
@endsection
