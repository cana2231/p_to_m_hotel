<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index () {
        return view('register/index');
    }

    public function regist(Request $request)
    {
        var_dump($request->input());
        exit;


        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'address' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json(['message' => 'ユーザー登録が完了しました。'], 201);
        TODO ログインをしてTOPへ遷移させる
    }

}
