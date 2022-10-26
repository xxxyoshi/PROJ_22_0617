<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function passwordEdit(){

        return view('test.passwordEdit');
    }


    public function passwordUpdate(Request $request){

        $request->validate([
            'newPassword' => ['required', 'string', 'confirmed']
        ],[
            'newPassword.required' => '入力必須です。',
            'newPassword.confirmed' => 'パスワードが一致しません。',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return back();
    }

    public function chat(){

        return view('chat.bot');
    }
}
