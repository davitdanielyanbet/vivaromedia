<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'postition' => 'string|max:255',
            'short_desc' => 'string|max:255',
            'avatar_url' => 'string|max:255'
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));
        $accounts = Accounts::create([
            'user_id' =>  $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'postition' => $request->postition,
            'short_desc' => $request->short_desc,
            'avatar_url' => $request->avatar_url
        ]);

        event(new Registered($user));
        event(new Registered($accounts));

        return redirect(RouteServiceProvider::HOME);
    }
}
