<?php
namespace App\Http\Controllers\Doctor;
use App\User;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Doctor;


class DoctorController extends Controller
{
    use RegistersUsers;

    public function index()
    {
        $doctor = User::doctor()
        ->get();
        return view('doctor.show');
    }
    public function create()
    {
        return view('doctor.newdoctor');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    protected function store(Request $data)
    {
        User::create([
            'role_id' => 2,
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $doctor = User::where('role_id','2')->get();
        return view('doctor.show',compact('doctor'))->with('success','New Doctor Added');
    }
    public function show()
    {
        $doctor= User::where('role_id','2')->get();
        return view('doctor.show',compact('doctor'));
    }
    public function destroy(){
        $doctor=User::findOrFail($id)->delete();
        Toastr::succes('Doctor Deleted','Sucess');
        return redirect()->back();
    }

}
