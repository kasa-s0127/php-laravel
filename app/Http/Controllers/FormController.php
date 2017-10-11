<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class FormController extends Controller
{
    /**
     * 入力画面
     *
     * @return string
     */
    public function input()
    {
        //inputのページを返す
        return view('form.input');

    }
    
    /**
     * 確認画面
     *
     * @return string
    */ 
    public function confirm(PostRequest $request)
    {
        //inputされた値をセッションに格納
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('tel', $request->input('tel'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('gender', $request->input('gender'));
        $request->session()->put('content', $request->input('content'));
        
        return view('form.confirm')
        //セッションに格納された値を引き継ぐ
        ->with([
            'name'=> $request->session()->get('name'),
            'tel'=> $request->session()->get('tel'),
            'email'=> $request->session()->get('email'),
            'gender'=> $request->session()->get('gender'),
            'content'=> $request->session()->get('content'),
            ]);
            
    }
    
    /**
     * 完了画面
     *
     * @return string
     */
    public function complete()
    {
        //完了画面を返す
        return view('form.complete');
    }
 
}
