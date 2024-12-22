@extends('front.layout.app')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/register-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Register</h1>
                        <span class="subheading">Join us and create your account!</span>
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
                    <p>Fill out the form below to create your account and join our community!</p>
                    <div class="my-5">
                        
                        <form method="POST" action="{{route('store.user')}}">
                            @csrf
                            @include('front._partials.message')

                            <!-- Name Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" value="{{old('name')}}" type="text" placeholder="Enter your name..." name="name" />
                                <label for="name">Name</label>
                                @error('name')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" value="{{old('email')}}" type="email" placeholder="Enter your email..." name="email" />
                                <label for="email">Email address</label>
                                @error('email')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        
                            <!-- Password Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="Enter your password..." name="password" />
                                <label for="password">Password</label>
                                @error('password')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password_confirmation" type="password" placeholder="Confirm your password..." name="password_confirmation" />
                                <label for="password_confirmation">Confirm Password</label>
                                @error('password_confirmation')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton"
                                type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
