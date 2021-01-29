<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KensakuController extends Controller
{

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインして下さい。'];
        return view('kensaku.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $msg = 'ログインしました。(' . Auth::user()->name . ')';
            return view('kensaku.home.home1', ['message' => $msg]);
        } else {
            $msg = 'ログインに失敗しました。';
            return redirect('kensaku.auth', ['message' => $msg]);
        }
    }

}