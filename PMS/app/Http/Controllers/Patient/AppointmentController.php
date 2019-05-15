<?php
namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\AdAppointment;
use Illuminate\Support\Facades\Notification;
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
        $appointment = Appointment::latest()->get();
        return view('patient.appointment.index',compact('appointment'));
    }
    public function create()
    {
        return view('patient.appointment.appoint');   
    }
    public function store(Request $request)
    {
        $appointment= new Appointment;
        //$appoinment->user_id = Auth::id();
        $appointment->doctor_name = $request->input('doctor_name');
        $appointment->appointment_takenby = $request->input('appointment_takenby');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->user_id = auth()->user()->id;
        $appointment->save();
        $appointment->user->notify(new AdAppointment($appointment));
        

        Toastr::success('Appointment Successfully Saved :' ,'Success');
        return redirect()->route('patient.appointment.index');

    }
    public function display()
    {
        
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('patient.appointment.edit',compact('appointment'));
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
        Toastr::success('Appointment successfully Updated:)','Success');
        return redirect()->route('patient.appointment.index');
    }
    public function destroy($id)
    {
      Appointment:: find($id)->delete();
      Toastr::success('Appointment successfully deleted:)','Success');
      return redirect()->back();
    }
}