<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;

use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        if (auth::user()->usertype == '0') {
            return redirect('/appointment/{appointment}');
        }
        else {
            return view('appointment.index',compact('appointments'));
        } 
        
    }

    public function create()
    {
        $doctors = Doctor::all();
        
        return view('appointment.create',compact('doctors'));
    }

    public function store()
    {
        $data=request()->all();

        $user_id =  auth::user()->id;
        
        Appointment::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'date' => $data['date'],
            'message' => $data['message'],
            'doctor_id' => $data['doctorname'],
            'user_id' => $user_id
        ]);
        
        
        

        return redirect('/appointment/{appointment}');
    }

    public function show($appointment)
    {
        $appointments = auth::user()->appointments->all();
        
        return view('appointment.show',compact('appointments'));
    }

    public function Edit($appointment)
    {
        //$appointment = Doctor::FindOrFail($appointment);
        return view('doctor.edit');
    }

    public function update()
    {
       // $data = request()->['name' => ['required', 'string', 'max:255'],];

        
        //Appointment::update(['name' => $data['name'],]);
        return redirect('/appointments');
    }

    public function destroy($appointment)
    {
        Appointment::FindOrFail($appointment)->delete();
        return redirect('/appointment');
    }
}
