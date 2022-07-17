@extends('layouts.app')
@section('content')
<div class="col-6 offset-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center mt-4 mb-4 pb-4">Publish News</h4>
                    
                    <form action="/blog" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="mb-4">
                      <label for="author">Author</label>

                    <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                      </div>
                      <div class="form-group mb-4">
                        <label for="title">Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      
                      <div class="form-group mb-4">
                        <label for="article">Publish your article...</label>
                        <textarea class="form-control @error('article') is-invalid @enderror" id="article" rows="4" name="article" value="{{ old('article') }}" required autocomplete="article" autofocus></textarea>
                        @error('article')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group mb-4">
                        <label>File upload</label>
                        <input type="file" name="image" class="form-control-file">
                        
                      </div>
                      <div class="row ">
                          <div class="col text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                         <div class="col">
                         <button type="reset" class="btn btn-dark">Reset</button>
                         </div>
                      
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
@endsection