<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ToDoListController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function redirectToPage(){
        return view('/login_page');
    }
}
