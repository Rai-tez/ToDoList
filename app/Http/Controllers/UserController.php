<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request){
        $request->session()->pull('login_msg');
        $username = $request->input('username_input');
        $password = $request->input('pass_input');
        if($request->submit == 'register_submit'){
            return redirect('register');
        } else {

            if(empty($username) || empty($password)){
                $request->session()->put('login_msg', "Username or password incorrect");
                return redirect('login');
            }

            $userRetrieved = $this->retrieveUser($username);
            $userCompare = ($username == $userRetrieved->name);
            $passCompare = ($password == $userRetrieved->password);

            // if(){

            // }
            if($userCompare && $passCompare){
                $request->session()->flush();
                $request->session()->put('id', $userRetrieved->id);
                $request->session()->put('username', $userRetrieved->name);
                return redirect('todolist');
            } else {
                // user does not exist
                // but we will anonymously tell the people
                // that either the username or password have failed
                // and redirect them back to the login page again
                // with the prompt mentioned
                // $request->session()->put('login_err', "Username or password incorrect");
                return redirect('login');
            }
        }
    }

    public function register(Request $request){
        $request->session()->pull('mismatch');
        $formFields = $request->validate([
            'reg_username_input' => ['required', Rule::unique('users', 'name')],
            'reg_pass_input' => 'required',
            'reg_retyped_pass_input' => 'required',
        ]);

        $username = $request->input('reg_username_input');
        $password = $request->input('reg_pass_input');
        $retypedPassword = $request->input('reg_retyped_pass_input');

        if($password != $retypedPassword){
            $request->session()->put('mismatch', 'Passwords are not the same');
            return redirect('register');
        } else {
            $request->session()->put('login_msg', 'Registration successful!');
            return redirect('login');
        }

    }

    public static function redirectToHomePage(){
        /**
         * if $_SESSION is null or terminated,
         * redirect aback to hompeage or login page for
         * re logging
         */
        return view('/homepage');
    }

    public function retrieveUser(String $userToBeFound){
        return DB::table('users')->where('name', $userToBeFound)->first();
    }

    public function passwordChecker(String $base, String $comparison){
        //insert encrypt decrypt, but for now we'll do a simple == ocmparision
        return $base == $comparison;
    }
}
