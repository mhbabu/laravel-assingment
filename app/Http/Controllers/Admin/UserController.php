<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserListDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserListDataTable $dataTable)
    {
        return $dataTable->render('backend.users.index');
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('backend.users.edit', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'user_type'   => 'required',
            'name'        => 'required',
            'email'       => 'required|string|email|max:255|unique:users',
            'password'    => 'required|string|min:8|confirmed'

        ], [], [
            'name'          => 'full name'
        ]);

        $user = new User();
        $user->user_type = $request->user_type;
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->input('password'));
        $user->save();

        $user->notify(new WelcomeEmailNotification($user, $request->input('password')));

        return redirect()->route('users.index')->with('message', 'User added successfully.');
    }


    public function update(Request $request, User $user)
    {
        $user->update([
            'user_type' => $request->user_type
        ]);

        return redirect(route('users.index'))->with('message', 'User updated successfully.');
    }

    public function delete(User $user)
    {
        $user->delete();
        return back()->with('message', 'User deleted successfully.');
    }

    public function profileEdit(User $user)
    {
        $data['user'] = $user;
        return view('backend.users.profile', $data);
    }
    public function profileUpdate(Request $request, User $user)
    {

        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id
        ]);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email
        ]);
        return back()->with('message', 'User updated successfully.');
    }

    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'old_password'          => 'required',
            'password_confirmation' => 'required|string|min:8',
            'password'              => 'required|string|min:8|confirmed'
        ]);

        $oldPassword = $request->old_password;
        $confirmPassword = $request->password_confirmation;

        if (!(Hash::check($oldPassword, auth()->user()->password))) {
            return back()->with('error', 'Old password does not matched');
        }

        if ($oldPassword == $confirmPassword) {
            return back()->with('error', 'You have entered your old password!');
        }

        $user->update([
            'password' => Hash::make($request->input('password'))
        ]);

        return back()->with('message', 'User password updated');
    }
}
