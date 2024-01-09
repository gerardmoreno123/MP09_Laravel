<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
        return view('task',['tasks' => Task::all()
        ]);}
}
