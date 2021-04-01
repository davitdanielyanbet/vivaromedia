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
use Illuminate\Support\Facades\Validator;

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
     * @param \Illuminate\Http\Request $request
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
            'postition' => 'required|string|max:255',
            'short_desc' => 'required|string|max:255',
        ]);
//        dd($request);
        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));
        $accounts = [
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'postition' => $request->postition,
            'short_desc' => $request->short_desc
        ];
        if ($request->hasFile('avatar_url')) {
            $validator = Validator::make($request->all(), [
                'avatar_url' => 'required|image|max:2054'
            ]);
            if ($validator->fails()) {
                return 'Validation error';
            } else {
                $avatar = $request->file('avatar_url')->getClientOriginalName();
                $user->userAccount()->update(['avatar_url' => $avatar]);
                $accounts['avatar_url'] = $request->file('avatar_url')->store('avatars', 'public');
            }
        }
        Accounts::create($accounts);
//            }

        event(new Registered($user));
        event(new Registered($accounts));

        return redirect(RouteServiceProvider::HOME);
    }
}
