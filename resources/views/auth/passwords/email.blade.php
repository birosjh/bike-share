@extends('auth.wrapper')

@section('wrapped-content')
    <div class="title is-2">Reset Password</div>
    {{-- todo: setup mail client, test password reset --}}
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="field{{ $errors->has('email') ? ' is-danger' : '' }}">
                <label for="email" class="label">E-Mail Address</label>

                <div class="control">
                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
