<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        $username = DB::table('username')->post();
        $password = DB::table('password')->post();

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('menu');
        }

        if (Auth::check()) {
            // The user is logged in...
        }

        Auth::logout();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}