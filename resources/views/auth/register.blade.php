@extends('layouts.auth')

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('static/logo.svg') }}"
                        height="36" alt=""></a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="POST" autocomplete="off" novalidate>
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="mb-2">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            autocomplete="off">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="password-confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirmation"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            autocomplete="off">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms
                                    and policy</a>.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
@endsection
