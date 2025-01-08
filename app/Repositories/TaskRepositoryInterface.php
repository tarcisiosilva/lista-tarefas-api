<?php
namespace App\Repositories;

use App\Models\Task;

interface TaskRepositoryInterface {
    public function findAll();
    public function findById($id);
    public function save(Task $task);
    public function delete($id);
}
