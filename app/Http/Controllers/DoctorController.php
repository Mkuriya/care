<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{   
   

    public function viewItems(program $programs){
        return view('doctor.view', ['programs' => $programs]);
    }
    public function editItems(program $programs){
        return view('doctor.edit', ['programs' => $programs]);
    }


    public function deleteItems(program $programs){
        $programs->delete();
        return redirect('/doctor/dashboard');
    }
   
    public function chat(){
        return view('doctor.chat');
    }
    public function upload(Request $request){
        $validated = $request->validate([
            'treatmentsname' => ['required'],
            'possibletreatment' => ['required'],
            'recomendation' => ['required'],
            
        ]) ;
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $validated["photo"] = '/storage/'.$path;
        $programs = program::create($validated);
        return redirect('/doctor/dashboard');
    }

    public function itemUpdate(program $programs, Request $request){
        $datas = $request->validate([
            'treatmentsname' => ['required'],
            'possibletreatment' => ['required'],
            'recomendation' => ['required'],
        ]);
        $datas['treatmentsname'] = strip_tags($datas['treatmentsname']);
        $datas['possibletreatment'] = strip_tags($datas['possibletreatment']);
        $datas['recomendation'] = strip_tags($datas['recomendation']);
        $programs->update($datas);
        return redirect('/doctor/dashboard');
    }

    public function doctorUpdate(Doctor $doctors, Request $request){
        $datas = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required'],
        ]);
        $datas['firstname'] = strip_tags($datas['firstname']);
        $datas['lastname'] = strip_tags($datas['lastname']);
        $datas['email'] = strip_tags($datas['email']);
        $doctors->update($datas);
        return redirect('/doctor/dashboard');
    }



    public function doctorLogout(){
        Auth::guard('doctors')->logout();
        return redirect('/doctor/login');
    }

    public function doctorLoginProcess(Request $request){
        $validated = $request->all();
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->guard('doctors')->attempt(['email' => $validated['email'] ,'password' => $validated['password']])){
            return redirect('/doctor/dashboard');
            $request->session()->regenerate();
            $doctor = auth()->guard('doctors')->user();
        } else{
            return redirect()->back()->with('error', 'Email and Password are not correct!');
        }
    }
    public function register(Request $request){
        $validated = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]) ;

        $validated['password'] = bcrypt($validated['password']);
        $doctor = Doctor::create($validated);
        
        return redirect('/doctor/login');
    }

    public function doctorProfile(Doctor $doctors){
        return view('doctor.profile', ['doctors' => $doctors]);
    }
    public function doctorUpload(){
        return view('doctor.upload');
    }
    public function doctorDashboard(){
        $data = program::all();
        $totalUser = User::count();
        $totalProgram = program::count();
        return view('doctor.dashboard',compact('totalUser', 'totalProgram'), ['programs' => $data]);
    }
    public function doctorLogin(){
        return view('doctor.login');
    }
    public function doctorRegister(){
        return view('doctor.registration');
    }
    public function index()
    {
        return view('home');
    }
}
