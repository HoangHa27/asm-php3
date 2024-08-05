@extends('clients.layouts.master')

@section('title')
    Đăng nhập
@endsection

@section('breadcump')
    <div class="banner text-center">
        @include('clients.components.breadcump', [
            'page' => 'Đăng nhập',
            'breadcump' => ''
        ])
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="/themes/clients/images/hi.jpeg"hi1.webp
                                class="img-fluid" alt="Sample image" width="100%">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form action="{{ route('login') }}" method="POST">

                                @csrf

                                <div
                                    class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                </div>

                                <!-- Email input -->
                                <div class="row mb-3">
                                    {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Email Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password input -->
                                <div class="row mb-2">
                                    {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                              
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">

                                    <button type="submit" class="btn btn-primary"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                        {{ __('Login') }}
                                    </button>

                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                            href="{{ route('register') }}">{{ __('Register') }}</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection