<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userUpdate(User $users, Request $request){
        $datas = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required'],
        ]);
        $datas['firstname'] = strip_tags($datas['firstname']);
        $datas['lastname'] = strip_tags($datas['lastname']);
        $datas['email'] = strip_tags($datas['email']);
        $users->update($datas);
        return redirect('/user/dashboard');
    }

    public function userProfile(User $users){
        return view('user.profile', ['users' => $users]);
    }

    public function viewItems(Item $items){
        return view('user.view', ['items' => $items]);
    }

    public function userLogout(){
        Auth::guard('users')->logout();
        return redirect('/user/login');
    }

    public function userLoginProcess(Request $request){
        $validated = $request->all();
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if(auth()->guard('users')->attempt(['email' => $validated['email'] ,'password' => $validated['password']])){
            return redirect('/user/dashboard');
            $request->session()->regenerate();
            $users = auth()->guard('users')->user();
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
        $user = User::create($validated);
        
        return redirect('/user/dashboard');
    }
    public function userDashboard(){
        $data = Item::all();
        return view('user.dashboard', ['items' => $data]);
    }
    public function userLogin(){
        return view('user.login');
    }
    public function userRegister(){
        return view('user.registration');
    }
}
