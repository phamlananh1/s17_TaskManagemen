<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(){
        $tasks = Task::All();
        return view('index', compact('tasks'));
    }
}
