<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profileEdit()
    {
        $admin = User::find(Auth::user()->id);
        return view('admin.pages.edit_profile' , compact('admin'));
    }

    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;

        $admin = User::findOrFail($id);
        $admin->name =$request->username;
        $admin->email=$request->email;
        $admin->created_at= Carbon::now();

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');

            $imageName = 'admin_' . hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/admin'), $imageName);

            $admin->photo = 'uploads/admin/' . $imageName;
        }

        $admin->save();
        $notification = [
            'message'=> 'Profile Updated Successfully' , 
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);

    }
    public function profilePasswordChange()
    {
        return view('admin.pages.change_password');
    }
    public function profilePasswordUpdate(Request $request)
    {
        $request -> validate([
            'old_password' => 'required|string' ,
            'new_password' => 'required|string',
            'confirm_new_password' => 'required|same:new_password',
        ]);

        $admin = User::find(Auth::user()->id);
        if(!Hash::check($request->old_password , $admin->password)){
             $notification = [
            'message'=> 'Old Password Does Not Match' , 
            'alert-type' => 'info'
        ];
        return redirect()->back()->with($notification);
        }

        $admin->password =Hash::make( $request ->new_password);  
        $admin->save();

         $notification = [
            'message'=> 'Password Updated Successfully' , 
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
