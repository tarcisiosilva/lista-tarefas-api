<?php
namespace App\Services;

use App\Repositories\TaskRepositoryInterface;
use App\Models\Task;

class TaskService {
    private $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository) {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTasks() {
        return $this->taskRepository->findAll();
    }

    public function createTask($data) {
        $task = new Task();
        $task->fill($data);
        $this->taskRepository->save($task);
    }

    public function updateTask($id, $data) {
        $task = $this->taskRepository->findById($id);
        $task->fill($data);
        $this->taskRepository->save($task);
    }

    public function deleteTask($id) {
        $this->taskRepository->delete($id);
    }
}
