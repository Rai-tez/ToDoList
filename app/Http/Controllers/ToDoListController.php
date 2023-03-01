<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ToDoListController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showList(){
        return view('todolist',[
            'tasks' => TodoList::all()
        ]);
    }
    public function test(){
        return view();
    }
}
