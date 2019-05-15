<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

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

    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {    
       
        // get form image
        $image = $request->file('image');
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
//            resize image for category and upload
            $category = Image::make($image)->resize(1600,479)->save();
            Storage::disk('public')->put('category/'.$imagename,$category);
        } else {
            $imagename = "default.png";
        }



        $prescription = new Prescription;
        $prescription->patient_name = $request->input('patient_name');
        $prescription->med_name = $request->input('med_name');
        $prescription->image = $request->input('image');
        $prescription->user_id = auth()->user()->id;
        $prescription->save();
        Toastr::success('Prescription Successfully Saved :' ,'Success');

        

        return redirect('/displayprescription');
    }
    public function display()
    {
        return view('addprescription');
    }
    public function show()
    {
        $prescription = Prescription::all();
        return view('viewprescription')->with('prescription',$prescription);
    }
    public function edit($id)
    {
        $prescription = Prescription::find($id);
        return view('editform',compact('prescription','id'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'Patient_name' => 'required',
            'medicine' => 'required',
        ]);
        $prescription= Prescription::find($id);
        $prescription->patient_name= $request->input('patient_name');
        $prescription->medicine=$request->input('medicine');
        $prescription->save();
        return redirect(('prescription/show'))->with('success','Data Updated');
    }
    public function destroy($id)
    {
        
    }
}