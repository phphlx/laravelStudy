<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
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

        if (\Auth::attempt($credentials)) {
            session()->flash('success', 'welcome back');
            return redirect()->route('users.show', \Auth::id());
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
