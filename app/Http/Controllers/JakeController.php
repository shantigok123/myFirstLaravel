<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JakeController extends Controller
{
    public function index(){
        $jake = 'ewewe';
        return view('pages.login', compact('jake'));
    }

    public function home(){
        return view('pages.home');
    }

    public function register(){
        return view('pages.register');
    }

    public function process(Request $request){

        // dd($request);
        $validated = $request->validate([
            "name" => ['required'],
            'password' => 'required'
        ]);

        if (auth()->attempt($validated)){
            $request->session()->regenerate();
            session(['jake' => 'pogi']);
            return redirect('/home')->with('message','Login Successful');

        }
        else {
            // user is not valid, redirect back to login here
            return back()->withErrors(['kkk' => 'Invalid Username of Password'])->onlyInput('kkk');
        }
    }


    public function logout(){
        auth()->logout();
        session()->invalidate();
        return redirect('/');
    }

    public function addUser(Request $request){

        $validated = $request->validate([
            "name" => ['required',Rule::unique('users','name')],
            "email" => ['required','email',Rule::unique('users','email')],
            "password" => ['required','confirmed']
        ]);
            $validated['password'] = bcrypt($validated['password']);
            User::create($validated);
            return redirect('/register');
    }



}
