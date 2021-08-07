<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Request;
use App\Mail\DemoApproved;
use Illuminate\Http\Request as Req;
use App\Notifications\RequestAccess;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.list',[
            'request' => Request::all(), 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Req  $Req
     * @return \Illuminate\Http\Response
     */
    public function store(Req $Req)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'school_name' => 'required',
            'address' => 'required',
            'total_student' => 'required',
        ]);
        Request::create($data);
        $user = User::find(1);
        Notification::send($user, new RequestAccess($data));
        return redirect('/')->with('success','Your Request submited successfully');
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->delete();
        return redirect('/request')->with('success','Record Deleted Successfully');
    }

    public function change_status($status,$id)
    {
        $demo_request = Request::findOrFail($id);
        $demo_request->status = $status;
        $demo_request->save();
        if ($demo_request->status == 2) {
            $password = uniqid();
           $user =  User::create([
                'first_name' => $demo_request->name,
                'last_name' => $demo_request->name,
                'email' => $demo_request->email,
                'mobile' => $demo_request->mobile,
                'password' => Hash::make($password)
            ]);
            $role = Role::where('name','school-admin')->first();
            $user->attachRole($role);
            $data = [
                'name' => $demo_request->name,
                'email' => $user->email,
                'password' => $password,
            ];
            Mail::to($demo_request->email)->send(new DemoApproved($data));
        }
        return redirect('/request')->with('success','Status Changed');
    }
}
