<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('account.profile');
    }

    public function storeContacts(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'email' => 'required|email',
            'phone' => 'numeric',
        ]);
        // check if email has changed
        if ($request->input('email') !== $user->email) {
            // check if it has already been taken
            $this->validate($request, [
                'email' => 'unique:users'
            ]);
            $user->email = $request->input('email');
        }
        // check if phone has changed
        if($request->input('phone') !== $user->phone){
            // check if it has already been taken
            $this->validate($request, [
                'phone' => 'unique:users',
            ]);
            $user->phone = $request->input('phone');
        }

        $user->save();

        return redirect('account/profile');
    }
}
