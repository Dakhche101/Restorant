<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        if(Auth::user()->user_type=='0'){
            return redirect('/booking');
        }else{
            $todos=Todo::all();
            return view('admin.home',compact('todos'));
        }

    }

    public function checkEmail($x){
        $user=User::where('email',$x)->first();
        if($user){
            return true;
        }else{
            return false;
        }
    }

    public function editinfo(Request $request){
        $user=User::findOrFail(Auth::user()->id);
        if($user->name!=$request->name && $user->email==$request->email){
            $user->name=$request->name;
            $user->save();
            return redirect()->back()->with('message','Name updated Successfuly');
        }elseif ($user->name==$request->name && $user->email==$request->email) {
            return redirect()->back()->with('er','No Thing Updated');
        }elseif($user->name==$request->name && $user->email!=$request){
            if($this->checkEmail($request->email)){
                return redirect()->back()->with('er','Email Already Registred');
            }else{
                $user->email=$request->email;
                $user->save();
                return redirect()->back()->with('message','Email Updated Successfuly');
            }
        }elseif($user->name!=$request->name && $user->email!=$request->email){
            if($this->checkEmail($request->email)){
                return redirect()->back()->with('er','Email Already Registred');
            }else{
                $user->name=$request->name;
                $user->email=$request->email;
                $user->save();
                return redirect()->back()->with('message','Name And Email Updated Successfuly');
            }
        }
    }

    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8',
        ]);
        $user = Auth::user();
        if (Hash::check($request->old_password, $user->password)) {
            if($request->password==$request->password_confirmation){
                $user->password=Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('message', 'Password Updated Successfully');
            }
            return redirect()->back()->with('er', 'Password Not Confirmed');
        } else {
            return redirect()->back()->with('er','Incorect password');
        }
    }

}
