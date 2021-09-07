<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Task\TaskInterface;
use App\Http\Requests\CreateTask;
use App\Http\Requests\UpdateTask;

class TaskController extends Controller{
    protected $taskRepo;

    function __construct(TaskInterface $taskInterface){
        $this->taskRepo=$taskInterface;
    }

    function index(){
        $data=$this->taskRepo->getAll();

        return view('home',['data'=>$data]);
    }

    function viewThemTask(){
        return view('them');
    }

    function new(CreateTask $request){
    }

    function viewSuaTask($id){
        return view('sua');
    }

    function update(UpdateTask $request,$id){
    }

    function delete($id){
        echo 'Xoa';
    }
}
