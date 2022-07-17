@extends('layouts.app')
@section('content')
<div class="page-section bg-light">
    <div class="container">
        <div class="row">
        <div class="col-9">
                <h1 class="text-center mb-5">Latest News</h1>
            </div>
            <div class="col-3">
            @if($admin)
                <a href="/blog/create" class="btn btn-primary ml-auto">Add News</a>
            @endif
            </div>
        </div>
        
        <div class="row mt-5">
        @foreach($blogs as $blog)
            <div class="col-lg-4 py-2">
                
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="/blog/{{ $blog->id}}">Covid19</a>
                        </div>
                        <a href="/blog/{{ $blog->id}}" class="post-thumb">
                            <img src="/storage/{{ $blog->image}}" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="/blog/{{ $blog->id}}">{{$blog->title}}
                                </a></h5>
                        <div class="site-info">
                            <div class="mr-2">
                                <span>{{ $blog->author}}</span>
                            </div>
                            <span class=""></span> {{$blog->timestamp}}
                        </div>
                    </div>
                </div>
                
            </div>

            @endforeach
        </div>
    </div>
</div> <!-- .page-section -->
@endsection