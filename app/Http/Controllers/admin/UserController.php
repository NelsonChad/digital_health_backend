<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('auth.register', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $users = User::get();

        return view('auth.register', compact('user','users'))->with('editUser', true);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $avatarName = "default.png";
        if (isset($request['avatar'])) {
            $file = $request['avatar'];
            $avatar = time() . '.' . $file->getClientOriginalExtension();
            $request['avatar']->move("images/uploads/users", $avatar);
            $avatarName = $avatar;
        }

        $response = User::find($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'avatar' => $avatarName,
            'role'=> $request['role']
        ]);
        return redirect()
            ->back()
            ->with('success', "ao Actualizar utilizador.")
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
