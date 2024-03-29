<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Store(Request $request){
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back()->with('message','message sent successfuly');
    }

    public function showContact(){
        $contacts=Contact::all();
        return view('admin.contact',compact('contacts'));
    }

    public function destroy($id){
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
