<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $tasks = Task::query()->get();
        return $this->sendApiResponse($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaskRequest $request
     * @return JsonResponse
     */
    public function store(TaskRequest $request): JsonResponse
    {
        try {
            $task = Task::query()->create($request->validated());
            return $this->sendApiResponse(Task::query()->find($task->id));
        } catch (Exception $exception) {
            return $this->sendApiResponse(null, 'Server Error', 'ServerError', [], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return JsonResponse
     */
    public function update(Request $request, Task $task): JsonResponse
    {
        try {
            $task->update($request->only('status'));
            return $this->sendApiResponse($task);
        } catch (Exception $exception) {
            return $this->sendApiResponse(null, 'Server Error', 'ServerError', [], 500);
        }
    }
}
