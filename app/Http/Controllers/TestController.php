<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
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

    public function news(){
        $news = News::all()->sortByDesc('created_at');

        return view('news.news', compact('news'));
    }

    public function newsShow(Int $news){
        $newsShow = News::find($news);

        return view('news.newsShow', compact('newsShow'));
    }

    public function newsCategory($news){
        $newsCategory = News::where('category', $news)
            ->orderBy('created_at', 'desc')
            ->get();    

        return view('news.newsCategory', compact('newsCategory'));
    }
}
