@extends('layouts.app')
@section('content')
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
            </div>
            <div class="col-3">
                @if($admin)
                <a href="/doctor/create" class="btn btn-primary ml-auto">Add Doctor</a>
                @endif
            </div>
        <div class="row">
            

            

        @foreach($doctors as $doctor)


            <div class="col-4" >
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="/storage/{{ $doctor->image}}" alt="">
                            <div class="meta">
                                <a href="/doctor/{{ $doctor->id}}"><span>View</span></a>
                                
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $doctor->name }}</p>
                            <span class="text-sm text-grey">{{ $doctor->specialty}}</span>
                            <p>Phone: <span>{{ $doctor->phone}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        

        </div>
    </div>

</div>

@endsection