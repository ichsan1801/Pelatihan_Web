<?php

namespace App\Http\Controllers;
use Validator;


use Illuminate\Http\Request;
use App\Repositories\Customers;
use Hash;

class AuthController extends Controller
{
    
    public function getLogin() {
        return view('fron.login');

    }
    
    public function postLogin(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'email'=>'required|email',
            'password'=>'min:6|required'
        ]);

        if ($validator->fails()) {
            $message= $validator->errors()->all();
            return redirect()->back()->with('danger',implode(',',$message));

        }
        $customers = Customers::findBy('email',$request->email);

        if ($customers->id ==null) {
            return redirect()->back()->with('danger','customers not found');
        }
        storeCustSession($customers);
        return redirect('/')->with('success','Welcome back!'.$customers->name);

    }
    public function postLogout(Request $request) {
        session()->forget('customers');
        return redirect('login'->with(['success'=>'Succes Logout']));
        }

    }


        
        

