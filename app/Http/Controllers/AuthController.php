<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FlatA;
use App\Models\FlatB;
use App\Models\FlatC;
use App\Models\FlatD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthController extends Controller
{

    public function Register()
    {
        return view('register.register');
    }

    public function RegisterPost(Request $request)

    {

        // Validate the request data
        $validator = FacadesValidator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('register')->with('success', 'Registration successful!');
    }

    public function Login()
    {
        return view('login.login');
    }


    public function LoginPost(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('dashboard')->with('success', 'Login successful!');
        }

        // Authentication failed
        return redirect()->route('login.submit')
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->withInput();
    }
    public function Dashboard()
    {
        $flatA = FlatA::count();
        $flatB = FlatB::count();
        $flatC = FlatC::count();
        $flatD = FlatD::count();
        $count = $flatA + $flatB + $flatC + $flatD;
        return view('dashboard')->with('count', $count);
       
    }

    public function Flats(){
        return view ('flats');
    }



    public function Logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logout successful!');
    }
}
