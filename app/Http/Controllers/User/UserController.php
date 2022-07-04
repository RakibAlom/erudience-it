<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user()
    {
        $users = User::where('utype', '1')->orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.user.users', compact('users','count'));
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        return view('user.profile', compact('user'));
    }
    public function settings($username)
    {
        $user = User::where('username', $username)->first();
        return view('user.settings', compact('user'));
    }

    public function updateSettings($username, Request $request)
    {
        $user = User::where('username', $username)->first();

        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'country' => $request->country,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'phone' => $request->phone,
        ]);

        if($user->userdetails){
            $details = UserDetail::where('user_id', $user->id)->first();
            $details->update([
                'bio_title' => $request->bio_title,
                'education' => $request->education,
                'profession' => $request->profession,
                'address' => $request->address,
                'language' => $request->language,
                'religion' => $request->religion,
                'fb_link' => $request->fb_link,
                'instagram_link' => $request->instagram_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'github_link' => $request->github_link,
                'about' => $request->about,
            ]);
        }else{
            $details = UserDetail::create([
                'user_id' => $user->id,
                'bio_title' => $request->bio_title,
                'education' => $request->education,
                'profession' => $request->profession,
                'address' => $request->address,
                'language' => $request->language,
                'religion' => $request->religion,
                'fb_link' => $request->fb_link,
                'instagram_link' => $request->instagram_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'github_link' => $request->github_link,
                'about' => $request->about,
            ]);
        }

        if($user)
        {
            return back()->with('success', 'User Information Updated!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function changePicture($username){
        $user = User::where('username', $username)->first();

        if(request()->has('image'))
        {
            if(request()->oldimage){
                unlink('storage/'.$user->image);
            }
            $user->update([
                'image' => request()->image->store('image/user', 'public'),
            ]);
        }
        return back()->with('success', 'Profile Picture Updated!');
    }

    public function changePassword($username, Request $request){
        $user = User::where('username', $username)->first();

        if(Hash::check($request->current_password, $user->password)){

            if($request->password == $request->password_confirmation){
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
                return back()->with('success', 'Password Changed Successfully');
            }else{
                return back()->with('error', 'Confirm password does not match!');
            }
        }else{
            return back()->with('error', 'Your current password does not match!');
        }

    }

}