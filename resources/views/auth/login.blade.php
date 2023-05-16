@extends('layouts.auth')

@section('content')
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark"><img
                                    src="{{ asset('static/logo.svg') }}" height="36" alt=""></a>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Login to your account</h2>
                                <form action="{{ route('login') }}" method="POST" autocomplete="off" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="your@email.com" autocomplete="off">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">
                                            Password
                                            <span class="form-label-description">
                                                <a href="{{ route('password.request') }}">I forgot password</a>
                                            </span>
                                        </label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Your password" autocomplete="off">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Remember me on this device</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-muted mt-3">
                            @if (Route::has('password.request'))
                                Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="{{ asset('static/illustrations/undraw_secure_login_pdn4.svg') }}" height="300"
                        class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
@endsection
