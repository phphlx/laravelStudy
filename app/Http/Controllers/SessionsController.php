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
            'email' => 'email|required|max:255',
            'password' => 'required'
        ]);

        if (\Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', \Auth::id());
        } else {
            session()->flash('danger', '抱歉, 邮箱密码不匹配');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        \Auth::logout();
        session()->flash('success', '成功退出');
        return redirect()->route('login');
    }
}
