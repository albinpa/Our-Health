@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="/storage/{{ $doctor->image}}" alt="">

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col">
                                <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                <span class="text-sm text-grey">{{ $doctor->specialty}}</span>
                                <p>Phone: <span>{{ $doctor->phone}}</span></p>
                            </div>
                            <div class="col">
                            @if($admin)
                                <div class="row">
                                    <div class="col">

                                        <div><a href="/doctor/{{ $doctor->id}}/edit" class="btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <form action="/doctor/{{ $doctor->id}}" method="post">
                                            @csrf
                                            @method('DELETE')


                                            <button type="submit" onclick="confirm('are you sure to delete?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection