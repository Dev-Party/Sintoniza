<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Invoice;
use Illuminate\Http\Request;
use App\Mail\BillingInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BillingController extends Controller
{
    public function getIndex()
    {
        return view('billing');
    }

    public function postIndex(Request $request)
    {
        $data = $request->all();

        if (! Auth::check()) {
            $validator = Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                return redirect('/billing')
                            ->withErrors($validator)
                            ->withInput();
            }

            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
        }

        $invoice = Invoice::create(['user_id' => Auth::user()->id]);

        Mail::to(Auth::user()->email)->send(new BillingInformation($invoice));

        return redirect('/account/invoices');
    }
}
