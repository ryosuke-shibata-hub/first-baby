<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function username()
    {
        //  emailの代わりに使用したいカラム名を指定する
        return 'user_id';
    }

    public function home()
    {
        return view('Auth.top');
    }

    public function login_form()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {


        $this->validate($request,[
                'user_id' => ['required','string','max:255','regex: /^[a-zA-Z0-9-_]+$/'],
                'password' => ['required','string','max:30','min:8'],
            ]);

        try {

           if (Auth::attempt([
               'user_id' => $request->input('user_id'),
               'password' => $request->input('password'),
               'delete_flg' => 0,
               'role_flg' => 5,
           ]));

               Log::error("成功");
                return redirect()->route('main.top');

               {
                Log::error("失敗");
                return back();
               }

        } catch (\Throwable $th) {

            Log::error('ログインに失敗しました');

            return back()
            ->with('login_error','ログインに失敗しました。');

        }
    }

    public function logout() {

        Auth::logout();

        return redirect()->route('home.top');
    }
}