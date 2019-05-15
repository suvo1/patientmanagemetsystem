<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Notifications\Add;

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
        return view('doctor.prescription.index',compact('prescription'));
    }
    public function create()
    {
        return view('doctor.prescription.addprescription');
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
        //$prescription->image = $request->input('image');
        $prescription->age = $request->input('age');
        $prescription->blood_group = $request->input('blood_group');
        $prescription->disease = $request->input('disease');
        $prescription->test = $request->input('test');


        $prescription->user_id = auth()->user()->id;
        $prescription->save();
       $prescription->user->notify(new Add($prescription));
        Toastr::success('Prescription Successfully Saved :' ,'Success');
        return redirect()->route('doctor.prescription.index');
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
        return view('doctor.prescription.edit',compact('prescription'));
    }
    public function update(Request $request,$id)
    {   
        $prescription= Prescription::find($id);
        $prescription->patient_name = $request->input('patient_name');
        $prescription->med_name = $request->input('med_name');
        $prescription->image = $request->input('image');
        $prescription->age = $request->input('age');
        $prescription->blood_group = $request->input('blood_group');
        $prescription->disease = $request->input('disease');
        $prescription->image = $request->input('image');
        $prescription->test = $request->input('test');

        $prescription->save();
        Toastr::success('Prescription successfully Updated:)','Success');
        return redirect()->route('doctor.prescription.index');
    }
    public function destroy($id)
    {
        Prescription:: find($id)->delete();
      Toastr::success('Prescription successfully deleted:)','Success');
      return redirect()->back();
    }
}