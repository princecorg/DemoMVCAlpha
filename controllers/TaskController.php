<?php
class TaskController {
    public function index() {
        $taskModel = new Task();
        $tasks = $taskModel->getAllTasks();

        require_once 'views/tasks.php';
    }
}