<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function tasks(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tasks' => 'required|array|min:1',
            'tasks.*.title' => 'required|string|max:255',
            'tasks.*.description' => 'nullable|string',
            'tasks.*.status' => 'nullable|in:pending,in_progress,completed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $tasks = array_map(function ($task) {
                return [
                    'title'       => $task['title'],
                    'description' => $task['description'] ?? null,
                    'status'      => $task['status'] ?? 'pending',
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ];
            }, $request->tasks);

            Task::insert($tasks);

            return response()->json([
                'status' => 'success',
                'message' => count($tasks) . " tasks inserted successfully"
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong!',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
