@extends('front.layout.app')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/login-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Login</h1>
                        <span class="subheading">Welcome back! Please login to your account.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Fill in the details below to log into your account.</p>
                    <div class="my-5">
                        
                        <form method="POST" action="{{ route('login.user') }}">
                            @csrf
                            <!-- Error Message -->
                            @if(session('error') != null)
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                        
                            <!-- Email Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" value="{{ old('email') }}" type="email" placeholder="Enter your email..." name="email" />
                                <label for="email">Email address</label>
                                @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <!-- Password Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="Enter your password..." name="password" />
                                <label for="password">Password</label>
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="remember-me" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
