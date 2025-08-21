<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
      public function index(){
        return view('account.manage-account', [
            'title' => 'kelola akun',
            'users' => User::all()
        ]);
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
