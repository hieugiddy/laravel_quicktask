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

    function Index(){
        $data=$this->taskRepo->getAll();

        return view('home',['data'=>$data]);
    }

    function ThemTask(CreateTask $request){

    }

    function SuaTask(UpdateTask $request,$id){

    }

    function XoaTask($id){
        echo 'Xoa';
    }
}
