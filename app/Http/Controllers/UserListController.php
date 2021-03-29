<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllUsers()
    {
        $users = User::with('userAccount')->orderBy('id', 'ASC')->simplePaginate(4);

        return view('userList', compact('users'));
    }
    public function editUserList($id){
        $user = User::findOrFail($id);

        $accounts = $user->userAccount;

        return view('user.edit', compact('user','accounts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function show(UserList $userList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function edit(UserList $userList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserList $userList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserList $userList)
    {
        //
    }
}
