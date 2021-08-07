<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Show the form for updating a Profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile_update_view()
    {
        return view('user.profile_update');
    }

    /**
     * Update the User Profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile_update()
    {
        request()->validate([
            'first_name' => ['required', 'string','min:4','max:10',],
            'last_name' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::id()],
            'mobile' => ['required', 'digits:10'],
        ]);
        $user = User::findOrFail(Auth::id());
        if (request('avatar')) {
            Storage::delete('public/user/avatar/'.$user->avatar);
            request('avatar')->store('public/user/avatar');
            $avatar = request('avatar')->hashName();
            
        }else{
            $avatar = $user->avatar;
        }
       $user->first_name = request('first_name');
       $user->last_name = request('last_name');
       $user->email = request('email');
       $user->mobile = request('mobile');
       $user->avatar = $avatar;
       $user->save();
    
    
       return redirect('/home')->with('success','Profile Updated Successfully');
    }
    
    /**
     * Update the User Password.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_password()
    {
        request()->validate([
            'old_password' => ['required','string','min:8'],
            'password' =>  ['required','string','min:8','confirmed'],
        ]);
        $user = User::findOrFail(Auth::id());
        
        if (Hash::check(request('old_password'),$user->password)) {
            $user->password = Hash::make(request('password'));
            $user->save();
            return redirect('home')->with('success','Password Changed Successfully');
        }
        return redirect()->back()->with('error','Current Password Does Not match');
    }
}
