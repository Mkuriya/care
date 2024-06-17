<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function deleteUser(User $user){
        $user->delete();
        return redirect('/admin/dashboard/userlist');
    }

    public function deleteAdmin(Doctor $doctor){
        $doctor->delete();
        return redirect('/admin/dashboard/doctorlist');
    }

    public function doctorlist(){
        $data = Doctor::all();
        return view('admin.doctorlist',['doctors' => $data]);
    }
    public function userlist(User $users){
        $data = User::all();
        return view('admin.userlist',['users' => $data]);
    }
    public function adminDashboard(){
        $totalUser = User::count();
        $totalProgram = program::count();
        $totalDoctor = Doctor::count();

        $data = program::all();
        return view('admin.dashboard',compact('totalUser', 'totalProgram', 'totalDoctor'), ['programs' => $data]);
    }

    public function adminLogout(){
        Auth::guard('admins')->logout();
        return redirect('/admin/login');
    }
    public function login(){
        return view('admin.login');
    }
    public function adminLoginProcess(Request $request){
        $validated = $request->all();
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        if(auth()->guard('admins')->attempt(['username' => $validated['username'] ,'password' => $validated['password']])){
            return redirect('/admin/dashboard');
            $request->session()->regenerate();
            $doctor = auth()->guard('admins')->user();
        } else{
            return redirect()->back()->with('error', 'username and Password are not correct!');
        }
    }
}
