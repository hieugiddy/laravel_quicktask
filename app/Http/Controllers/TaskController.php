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

    function viewThemTask(){
        return view('them');
    }
    function ThemTask(CreateTask $request){
        $result=$this->taskRepo->add($request->get('name'));
        if($result)
            return redirect(route('home'))->with('message','Thêm thành công');
        else
            return redirect(route('home'))->with('error','Thêm không thành công');
    }

    function viewSuaTask(){
        return view('sua');
    }
    function SuaTask(UpdateTask $request,$id){

    }

    function XoaTask($id){
        echo 'Xoa';
    }
}
