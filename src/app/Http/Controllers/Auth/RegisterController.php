<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Log;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

       public function register_form()
    {
        return view('Auth.register');
    }

    public function register_store(Request $request)
    {

        $request->validate([
            'accountname' => ['required','string','max:255'],
            'user_id' => ['required','string','max:255','unique:users','regex: /^[a-zA-Z0-9-_]+$/'],
            'email' => ['required','email','max:255','unique:users'],
            'password' => ['required','string','max:30','min:8','same:password_confirmed'],
            'password_confirmed' => ['required','string','max:30','min:8','same:password'],
        ]);

            Log::error('バリデーションエラー');

        try {
        $user = User::create([
            'name' => $request->accountname,
            'user_id' => $request->user_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_flg' => $request->role_flg,
            'delete_flg' => $request->delete_flg,
        ]);

            Log::error('正常に登録が完了');

        // return redirect(RouteServiceProvider::HOME);
            return redirect()->route('register.add');

        } catch (\Throwable $th) {

            Log::error('正常に館員登録が完了していません');

            return redirect()->back()->withErrors('システムエラー')->withInput();
        }

    }

    public function register_add()
    {
        return view('Auth.register_add');
    }

}