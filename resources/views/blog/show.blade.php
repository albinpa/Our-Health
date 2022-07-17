@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
                <div class="card">
                  <div class="card-body">
                    <div class="row d-flex">
                      <div class="col">
                      <h4 class="card-title mt-4 mb-4 pb-4">{{ $blog->title }}</h4>
                      </div>
                      @if($admin)
                      <div class="col pt-3">
                      <form action="/blog/{{ $blog->id}}" method="post">
                                            @csrf
                                            @method('DELETE')


                                            <button style="float:right" type="submit" onclick="confirm('are you sure to delete?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                      </div>
                      @endif
                    
                    
                    </div>
                    
                    <img style="width: 700px;" src="/storage/{{ $blog->image}}" alt="">

                    <p class="my-4">{{ $blog->article}}</p>
                  </div>
                </div>

        </div>
    </div>
</div>
@endsection