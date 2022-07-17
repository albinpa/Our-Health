@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">


                    <div class="col-9">
                        <h1 class="text-center">Appointments</h1>
                    </div>
                    <div class="col-3">

                        <a href="/appointment/create" class="btn btn-primary ml-auto">Book Appoitment</a>

                    </div>
                </div>

                <div class="card-body">
                    <table style="width:700px;">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            
                            <th class="text-center">Cancel</th>
                        </tr>
                        @foreach($appointments as $appointment)
                        <tr>
                            <td>{{$appointment->id}}</td>
                            <td>{{$appointment->name}}</td>
                            <td>{{$appointment->message}}</td>
                            <td>{{$appointment->doctor->name}}</td>
                            <td>{{$appointment->status}}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')


                                    <button style="float:center" type="submit"
                                        onclick="confirm('are you sure to delete?')"
                                        class="btn btn-danger" >Delete</button>
                                </form>
                            </td>
                            @endforeach
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection