<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
//use App\Notification\NewAppointmentAdd;

use App\Appointment;
use App\User;
use DB;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $appointment = new Appointment;
        $appointment->doctor_name = $request->input('doctor_name');
        $appointment->appointment_takenby = $request->input('appointment_takenby');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->user_id = auth()->user()->id;
        $appointment->save();

        

        return redirect('displayappointment')->with('success','Appointments Added');
    }
    public function display()
    {
        return view('appoint');
    }
    public function show()
    {
        $appointment = Appointment::all();
        return view('views')->with('appointment',$appointment);
    }
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('editform',compact('appointment','id'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'doctor_name' => 'required',
            'appointment_takenby' =>'required',
            'date' => 'required',
            'time' => 'required',
        ]);
        $appointment= Appointment::find($id);
        $appointment->doctor_name= $request->input('doctor_name');
        $appointment->appointment_takenby = $request->input('appointment_takenby');
        $appointment->date = $request->input('date');
        $appointment->time=$request->input('time');
        $appointment->save();
        return redirect(('appointment/show'))->with('success','Data Updated');
    }
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        if($appointment != null)
        {
            $appointment->delete();
            //return redirect()->route('appointment/show)->with(['message' => 'Successfully deleted!']);
        }
        //$events->delete();
        return redirect(('appointment/show'))->with('success','Appointment Removed');
    }
}