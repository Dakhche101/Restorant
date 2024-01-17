<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function ShowUsers(){
        $users=User::where('id','!=',Auth::user()->id)->get();
        return view('admin.users',compact('users'));
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->back();
    }

    public function role($id){
        $user=User::find($id);
        if($user->user_type=="1"){
            $user->user_type="0";
            $user->save();
            return redirect()->back();
        }else{
            $user->user_type="1";
            $user->save();
            return redirect()->back();
        }

    }
}
