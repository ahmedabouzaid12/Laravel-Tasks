@extends('front.layout.app')
@section('content')
    
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Me</h1>
                            <span class="subheading">{{$site_data->about_title}}</span>
                        </div>
                    </div>
                </div>
            </div>    
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    
                    @foreach (explode("\n", $site_data->about_content) as $paragraph)
                        <p class="lead text-muted mb-4">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </main>
        
@endsection
