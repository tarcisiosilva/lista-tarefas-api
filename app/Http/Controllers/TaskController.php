<?php
namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller {
    private $taskService;

    public function __construct(TaskService $taskService) {
        $this->taskService = $taskService;
    }

    public function index() {
        return response()->json($this->taskService->getAllTasks());
    }

    public function create(Request $request) {
        $this->taskService->createTask($request->all());
        return response()->json(['message' => 'Task created successfully']);
    }

    public function update(Request $request, $id) {
        $this->taskService->updateTask($id, $request->all());
        return response()->json(['message' => 'Task updated successfully']);
    }

    public function delete($id) {
        $this->taskService->deleteTask($id);
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
