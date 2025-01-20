<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        return view("tasks.create",[
            "title"=>"ایجاد تسک"
        ]);
    }

    public function createPost(CreateTaskRequest $request){
        
    }
}
