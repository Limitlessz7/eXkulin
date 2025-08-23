<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
      public function index(){
        return view('account.manage-account', [
            'title' => 'kelola akun',
            'users' => User::all()
        ]);
    }

    public function create(){
        return view('account.create-account', [
            'title' => 'tambah akun',
            'roles' => Role::all()
        ]);
    }


    public function store(Request $request){

        $validated = $request->validate([
            'usr_name' => 'required|max:255',
            'usr_telephone' => 'required|unique:users,usr_telephone',
            'usr_email' => 'required|unique:users,usr_email',
            'usr_password' => 'required|min:6',
            'usr_roles_id' => 'required|exists:roles,rl_id'
        ]);        

        User::create($validated);
        return redirect('/accounts/manage-account')->with('succes', 'Berhasil menambahkan akun');
    }

    public function edit(User $user){
        return view('account.edit-account', [
            'title' => 'edit akun',
            'roles' => Role::all(),
            'user' => $user
        ]);
    }


    public function update(Request $request, User $user){

        $validated = $request->validate([
            'usr_name' => 'required|max:255',
            'usr_telephone' =>  [
                'required',
                Rule::unique('users', 'usr_telephone')->ignore($user->usr_id, 'usr_id')
            ],
            'usr_email' => [
                'required',
                Rule::unique('users', 'usr_email')->ignore($user->usr_id, 'usr_id')
            ],
            'usr_password' => 'nullable|min:6',
            'usr_roles_id' => 'required|exists:roles,rl_id'
        ]);

        if ($request->filled('usr_password')) {
            $validated['usr_password'] = bcrypt($request->usr_password);
        } else {
            unset($validated['usr_password']);
        }        

        User::find($user->usr_id)->update($validated);
        return redirect('/accounts/manage-account')->with('succes', 'Berhasil mengubah data akun');
    }

    public function delete(User $user){
        User::where('usr_id', $user->usr_id)->delete();
        return redirect('/accounts/manage-account')->with('succes', 'Data berhasil dihapus');
    }

    public function show(){
        return view('account.account-list', [
            'users' => User::all()
        ]);
    }
}
