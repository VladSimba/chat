<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditAccountRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showAccountPage()
    {
        return view('account');
    }

    public function editAccountFormProcess(EditAccountRequest $request)
    {
        $user = auth()->user();
        $newData = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if ($request->new_password){
            $newData['password'] = Hash::make($request->new_password);
        }
        $user->update($newData);

        return redirect(route('account'));
    }
}
