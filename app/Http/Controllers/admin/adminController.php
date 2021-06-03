<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class adminController extends Controller
{
    public function showLogin()
    {
        return view('admin.adminLogin');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderGoogle()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        return redirect()->back();
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->user();

        // $user->token;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {

            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('message', 'Logged in Successfully!');
            } else {
                return redirect()->to('/admin/login/form')->with('message', 'You need an admin account!');
            }
        }
        return redirect()->back()->withErrors('Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }

    public function adminShow()
    {
        $categoryShow = Category::count();
        $customerShow = User::where('role', 'customer')->count();
        $sellerShow = User::where('role', 'seller')->count();

        return view('admin.index', compact('customerShow', 'sellerShow', 'categoryShow'));
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if ($user) {
            $user = new user();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_ID = $data->id;
            $user->avatar = $data->avatar;

            $user->save();
        }
        Auth::login($user);
    }
}
