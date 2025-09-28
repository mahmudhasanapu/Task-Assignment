<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Module</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card task-card">
        <div class="task-header text-center">
            <h2>Mahmud's Task Manager</h2>
        </div>
        <div class="card-body">
            <form id="taskForm">
                <div id="taskRepeater">
                    <div class="taskRow row">
                        <div class="col-md-4 mb-2">
                            <input type="text" name="tasks[0][title]" class="form-control" placeholder="Task Title" required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="text" name="tasks[0][description]" class="form-control" placeholder="Description">
                        </div>
                        <div class="col-md-3 mb-2">
                            <select name="tasks[0][status]" class="form-select">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <button type="button" class="btn btn-add" onclick="addRow()">+ Add Task</button>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </div>
            </form>
            <!-- Bootstrap Toast for Success (Top Right) -->
            <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
                <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body" id="toastMessage">
                            Success!
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom JS --}}
    <script src="{{ asset('js/task.js') }}"></script>
</body>
</html>
