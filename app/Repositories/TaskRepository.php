<?php
namespace App\Repositories;

use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface {
    public function findAll() {
        return Task::all();
    }

    public function findById($id) {
        return Task::findOrFail($id);
    }

    public function save(Task $task) {
        $task->save();
    }

    public function delete($id) {
        Task::destroy($id);
    }
}
