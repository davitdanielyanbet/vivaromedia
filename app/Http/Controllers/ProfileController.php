<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $accountDetails = $request->only([
                'first_name',
                'last_name',
                'position',
                'short_desc',
                'show_user'
            ]);

            if (!$request->input(['show_user'])){
                $accountDetails['show_user'] = 'off';
            }

            if (request()->hasFile('avatar_url')) {
                $validator = Validator::make($request->all(), [
                    'avatar_url' => 'required|image|max:2054'
                ]);
                if ($validator->fails()) {
                    return 'Validation error';
                } else {
                    $avatar = request()->file('avatar_url')->getClientOriginalName();
                    $user->userAccount()->update(['avatar_url' => $avatar]);
                    $accountDetails['avatar_url'] = request()->file('avatar_url')->store('avatars', 'public');
                }
            }

            $user->userAccount()->update($accountDetails);
            return redirect()->back()->with('message', 'You updated user information');
        }


        return view('user/edit', compact('user'));
    }

}
