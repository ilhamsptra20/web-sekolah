@extends('layouts.auth')

@section('content')
<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div>
            <h5 class="text-primary">Login</h5>
            <p class="text-muted">Login ke SAKTI.Online</p>
        </div>

        <div class="mt-4">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-Mail Address or Username') }}</label>
                    <input type="text" class="form-control" id="email" placeholder="{{ __('E-Mail Address or Username') }}" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                
                <div class="mb-3">
                    <div class="float-end">
                        <a href="auth-pass-reset-cover.html" class="text-muted">Forgot password?</a>
                    </div>
                    <label class="form-label" for="password-input">Password</label>
                    <div class="position-relative auth-pass-inputgroup mb-3">
                        <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password" required value="{{ old('password') }}">
                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger border-left-danger" role="alert">
                        <ul class="pl-4 my-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mt-4">
                    <button class="btn btn-success w-100" type="submit" id="submit-login">Sign In</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection