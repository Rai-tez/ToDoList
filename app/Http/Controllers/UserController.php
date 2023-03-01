<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function login(Request $request){
        $username = $request->input('username_input');
        $password = $request->input('password_input');
        if($request->submit == 'register_submit'){
            return redirect('register');
        } else {

            if($username == null || $password == null){
                $request->session()->put('login_err', "Username or password incorrect");
                return redirect('login');
            }

            $userRetrieved = $this->retrieveUser($username);
            $userCompare = ($username == $userRetrieved->name);
            $passCompare = ($password == $userRetrieved->pass);

            echo $userRetrieved;

            if($userCompare && $passCompare){
                $request->session()->put('id', $userRetrieved->id);
                $request->session()->put('username', $userRetrieved->name);
                $request->session()->pull('login_err');
                return redirect('todolist');
            } else {
                // user does not exist
                // but we will anonymously tell the people
                // that either the username or password have failed
                // and redirect them back to the login page again
                // with the prompt mentioned
                $request->session()->put('login_err', "Username or password incorrect");
                return redirect('login');
            }
        }
    }



    public function redirectToHomePage(){
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
