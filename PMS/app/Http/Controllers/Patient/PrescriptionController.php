<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

//use App\Notification\NewAppointmentAdd;

use App\Prescription;
use App\User;
use DB;

class PrescriptionController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {    
        $prescription = Prescription::latest()->get();
        //$prescription = Auth::user()->prescription()->latest()->get();
        return view('patient.prescription.index',compact('prescription'));
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {    
       

    }
    public function display()
    {
    }
    public function show()
    {
    }
    public function edit($id)
    {
        $prescription= Prescription ::find($id);
        return view('patient.prescription.view',compact('prescription'));
    }
    public function update(Request $request,$id)
    {   

    }
    public function destroy($id)
    {
      
    }
}