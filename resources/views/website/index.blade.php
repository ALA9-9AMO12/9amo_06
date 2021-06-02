@extends('website.template.master')

@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{asset('website/assets/img/home')}}">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-8 col-lg-8 col-xl-7">
                @foreach($posts as $post)
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{url('post/' . $post->slug)}}">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <h3 class="post-subtitle">{{$post->sub_title}}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">{{$post->user->name}}</a>
                        on {{date('M d, Y', strtotime($post->created_at))}}
                        @if(count($post->categories) > 0)
                        <span class="post-category">
                            @foreach($post->categories as $category)
                            Category : <a href="{{url('category/' . $category->slug)}}">{{$category->name}}</a>
                            @endforeach
                        </span>
                        @endif
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="category">
                    <h2 class="category-title">Category</h2>
                    <ul class="category-list">
                        @foreach($categories as $category)
                        <li><a href="{{url('category/' . $category->slug)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
