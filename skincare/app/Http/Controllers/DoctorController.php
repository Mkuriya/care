<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{   
    public function search (Request $request){
        $search =$request->search;

        $items = Item::where(function($query) use ($search){
            $query->where('productname', 'like', "%$search%")
            ->orWhere('skintype', 'like', '%$search%');
        })
        
        ->get();
        return view('/doctor/dashboard', compact('items', 'search'));
    }

    public function viewItems(Item $items){
        return view('doctor.view', ['items' => $items]);
    }
    public function editItems(Item $items){
        return view('doctor.edit', ['items' => $items]);
    }


    public function deleteItems(Item $items){
    $items->delete();
    return redirect('/doctor/dashboard');
}
   

    public function upload(Request $request){
        $validated = $request->validate([
            'productname' => ['required'],
            'skintype' => ['required'],
            'applyzone' => ['required'],
            'use' => ['required'],
            'effects' => ['required'],
            
        ]) ;
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $validated["photo"] = '/storage/'.$path;
        $items = Item::create($validated);
        return redirect('/doctor/dashboard');
    }

    public function itemUpdate(Item $items, Request $request){
        $datas = $request->validate([
            'productname' => ['required'],
            'skintype' => ['required'],
            'applyzone' => ['required'],
            'use' => ['required'],
            'effects' => ['required'],
        ]);
        $datas['productname'] = strip_tags($datas['productname']);
        $datas['skintype'] = strip_tags($datas['skintype']);
        $datas['applyzone'] = strip_tags($datas['applyzone']);
        $datas['use'] = strip_tags($datas['use']);
        $datas['effects'] = strip_tags($datas['effects']);
        $items->update($datas);
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
            'password' => 'required|min:6'
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
        
        return redirect('/doctor/dashboard');
    }

    public function doctorProfile(Doctor $doctors){
        return view('doctor.profile', ['doctors' => $doctors]);
    }
    public function doctorUpload(){
        return view('doctor.upload');
    }
    public function doctorDashboard(){
        $data = Item::all();
        return view('doctor.dashboard', ['items' => $data]);
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
