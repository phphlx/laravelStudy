<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create', 'store']
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

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if (Auth::user()->activated) {
                $fallback = route('users.show', Auth::user());
                session()->flash('success', 'welcome back');
                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                return redirect('/')->with('warning', '你的账号未激活, 请检查邮箱中的注册邮件进行激活');
            }
        } else {
            session()->flash('danger', 'not match');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'logout success');
        return redirect()->route('login');
    }
}
