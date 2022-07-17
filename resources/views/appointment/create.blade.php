@extends('layouts.app')
@section('content')

<div class="page-section">
    <div class="container">
      <h1 class="text-center">Make an Appointment</h1>

      <form class="main-form" method="POST" action="/appointment" enctype="multipart/formdata">
          @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2">
          <input type="text" class="form-control" placeholder="Number.." name="phone">
          </div>
          <div class="col-12 col-sm-6 py-2">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2">
             <select name="doctorname" id="departement" class="custom-select">
            @foreach($doctors as $doctor)
              <option value="{{ $doctor->id}}">{{ $doctor->name}}</option>

              @endforeach  
            </select>
            
          </div>
          
          <div class="col-12 py-2">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->


@endsection