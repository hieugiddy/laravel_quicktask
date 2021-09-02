<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class TaskRepository extends BaseRepository implements TaskInterface
{
	public function getModel()
    {
        return Task::class;
    }
    public function getAll(){
        return Task::orderByRaw('updated_at DESC')->paginate(15);
    }
    public function add($task){
        try{
            DB::beginTransaction();
            Task::create([
                'name' => $task
            ]);
        }
        catch(Exception $exception){
            DB::rollBack();
            return false;
        }
        DB::commit();
        return true;
    }
}
