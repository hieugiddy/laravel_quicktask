<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository implements TaskInterface
{
	public function getModel()
    {
        return Task::class;
    }
    
}
