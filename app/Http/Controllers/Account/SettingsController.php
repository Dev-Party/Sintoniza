<?php

namespace App\Http\Controllers\Account;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('account.settings.index', ['user' => $user]);
    }

    public function profile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/account/settings')
            ->with('message', trans('messages.updatedData'));
    }

    public function password(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request->old_password, $request->user()->password)) {
            $request->user()->fill([
                'password' => Hash::make($request->password),
            ])->save();

            Auth::logout();

            return redirect('/login')
                 ->with('message', trans('messages.changePassword'));
        }
    }
}
