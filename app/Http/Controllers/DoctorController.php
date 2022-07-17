<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        if (auth::user()->usertype == '0') {
            $admin= False;
        }
        else {
            $admin = True;
        } 
        return view('doctor.index',compact('doctors','admin'));
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function store()
    {
        
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
            
        ]);

        $imagePath = request('image')->store('uploads','public');
        Doctor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'specialty' => $data['specialty'],
            'image' => $imagePath,
            
        ]);
        // needed to add alert messge 
        
        return redirect('/doctor');
    }

    public function show($doctor)
    {
        $doctor = Doctor::FindOrFail($doctor);
        if (auth::user()->usertype == '0') {
            $admin= False;
        }
        else {
            $admin = True;
        } 
        
        return view('doctor.show',compact('doctor','admin'));
    }

    public function Edit($doctor)
    {
        $doctor = Doctor::FindOrFail($doctor);
        return view('doctor.edit',compact('doctor'));
    }

    public function update()
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
            
        ]);

        $imagePath = request('image')->store('uploads','public');
        Doctor::update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'specialty' => $data['specialty'],
            'image' => $imagePath,
            
        ]);
        return redirect('doctor.show');
    }

    public function destroy($doctor)
    {
        Doctor::FindOrFail($doctor)->delete();

        return redirect('/doctor');
    }
}
