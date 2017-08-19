@extends('auth.wrapper')

@section('wrapped-content')
    <div class="panel-heading">Reset Password</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field{{ $errors->has('email') ? ' is-danger' : '' }}">
                <label for="email" class="label">E-Mail Address</label>

                <div class="control">
                    <input id="email" type="email" class="input" name="email" value="{{ $email or old('email') }}" required autofocus>

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

            <div class="field{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}">
                <label for="password-confirm" class="label">Confirm Password</label>
                <div class="control">
                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <div class="control col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
