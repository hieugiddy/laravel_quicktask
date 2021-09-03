<?php

namespace App\Repositories\Task;

use App\Repositories\RepositoryInterface;

interface TaskInterface extends RepositoryInterface
{
 	public function getAll();
 	public function getTask($id);
 	public function add($task);
 	public function edit($name,$id);
}
