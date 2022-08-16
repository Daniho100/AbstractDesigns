<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Contact;

class AdminController extends Controller
{
    public function approved($id)
    {
        $data=user::find($id);

        $data->status='active';

        $data->save();

        return redirect()->back();
    }


    public function cancelled($id)
    {
        $data=user::find($id);

        $data->status='pending';

        $data->save();

        return redirect()->back();
    }


    public function delete($id)
    {
        $data=user::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function viewAdminMessages()
    {
        if(Auth::id())
        {
            if(Auth::user()->status=='admin')
            {
                $data=contact::all();

                return view('adminMessages', compact("data"));
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function search(Request $request)
    {
        if(Auth::id())
        {
            if(Auth::user()->status=='admin')
            {
                $search=$request->search;

                $data=user::where('status','Like','%'.$search.'%')->get();

                return view("adminhome",compact("data"));
            }

            else

            {

                return redirect()->back();

            }
        }
    }

}
