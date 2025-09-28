<?php

use App\Http\Controllers\TaskController;

Route::post('/tasks/multiple', [TaskController::class, 'tasks']);

