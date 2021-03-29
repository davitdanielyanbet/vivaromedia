<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name', 'email'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }


    public function edit(Request $request, $id)
    {

        $user = new User;
        $user = $user->where(['id' => $id])->first();

        if ($request->isMethod('put')) {
            $data = $request->all();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->update(['id' => $id]);
            $user->userAccount()->update($request->only([
                'first_name',
                'last_name',
                'position',
                'short_desc',
                'avatar_url'
            ]));
            return redirect()->back()->with('message', 'You updated user information');
        }


        return view('user/edit', compact('user'));
    }

}
