@extends('layouts.app')
@section('content')


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Appointments</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Id</th>
                            <th>User</th>
                            <th> Name </th>
                            <th> Message </th>
                            <th> Doctor</th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                          <tr>
                          
                            <td class="py-1">
                              {{$appointment->id}}
                            </td>
                            <td> {{$appointment->user->name}}</td>
                            <td> {{$appointment->name}}</td>
                            <td>
                            {{$appointment->message}}
                            </td>
                            <td> {{$appointment->doctor->name}}</td>
                            <td> cancel </td>
                           
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection