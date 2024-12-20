@extends('front.layout.app')
@section('content')
    {{-- @dd($post->comments) --}}
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('front') }}/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>All News</h1>
                        <span class="subheading">"Our Story, Your Inspiration"</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h2>{{ $post->title }}</h2>
                <div>
                    <img src="{{ $post->image }}" alt="">
                </div>
                <div>
                    <p>{{ $post->content }}</p>
                </div>
                <!-- Comments-->
                @foreach ($post->comments as $comment)
                    <div class="media mb-4">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Posted by : {{ $comment->user->name }}</h5>
                            <p>{{ $comment->message }}</p>
                            <p class="text-muted">Posted on : {{ $comment->created_at->format('F, Y - d') }}</p>
                            {{-- @if (auth()->user() && auth()->user()->id == $comment->user->id) --}}
                            @can('delete-comment', $comment)
                                <form action="{{ route('comment.destroy', $comment->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @endcan

                            {{-- @endif --}}
                            <hr>
                        </div>
                    </div>
                @endforeach
                {{-- @auth --}}
                @can('add-comment')
                    <form action="{{ route('comment.store', $post->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="comments">Write a comment</label>
                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="3" required></textarea>
                        </div>
                        <div class="form-group my-3">
                            <input type="submit" value="Add Comment" class="btn btn-primary">
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
                @endcan
                {{-- @endauth --}}

            </div>
        </div>
    </div>
@endsection
