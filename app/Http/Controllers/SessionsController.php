<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if (\Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', 'welcome back');
            $fallback = route('users.show', \Auth::id());
            return redirect()->intended($fallback);
        } else {
            session()->flash('danger', 'email dont match password');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        \Auth::logout();
        session()->flash('success', 'logout');
        return redirect()->route('login');
    }
}
