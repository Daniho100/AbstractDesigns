<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Contact;


class HomeController extends Controller
{
    public function index()
    {
        $status=Auth::user()->status;

        if($status=='admin')
        {
            $data=User::all();

            return view('adminhome', compact('data'));
        }

        elseif($status=='pending')
        {
            return view('pending');
        }

        else
        {
             return view('users');
        }
    }

    public function sendMessages(Request $request)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();
           
            $contact=new contact;

            $contact->name=$request->name;

            $contact->email=$request->email;

            $contact->phone=$request->phone;

            $contact->address=$request->address;

            $contact->message=$request->message;

            $contact->user_id=$user_id;
            
            $contact->save();

            return redirect()->back()->with('message','message sent successfully');
        }

        else
        {

            return redirect('login');

        }

    }
    

    public function user()
    {
        if(Auth::id())
        {
            if(Auth::user()->status!=='admin' && 'pending')
                {
                    return view('users');
                }
            else
                {
                    return redirect()->back();
                }
        }
    }

   
   
    public function viewMessages()
    {
        if(Auth::id())
        {
            if(Auth::user()->status=='active')
            {
                $userid=Auth::user()->id;

                $contact=contact::where('user_id', $userid)->get();

                return view('messages', compact('contact'));
            }
            else
            {
                return redirect()->back();
            } 
        }
    }

}
