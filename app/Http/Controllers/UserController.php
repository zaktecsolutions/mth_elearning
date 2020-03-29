<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //

   
    public function postSignUp(Request $request)
    {
        // Checks for validation of signin form

        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'firstname' => 'required| max:120',
            'lastname' => 'required| max:120',
            'password' => 'required| min:4',
        ]);

        // input sign in information
        $email = $request['email'];
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }

    public function getLogout()
    {

        Auth::logout();
        return redirect()->route('home');
    }

    public function getAccount()
    {
        return view('students.frontend.account', ['user' => Auth::user()]);
    }

    public function postSaveAccount(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:120',
        ]);

        $user = Auth::user();
        $user->first_name = $request['first_name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['first_name'] . '-' . $user->id . '.jpg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        return redirect()->route('account');
    }

    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}
