<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Create a new Task</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('tasks.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="task_title" class="form-label">Task Title</label>
            <input type="text" class="form-control" id="task_title" name="task_title" placeholder="Task Title">
        </div>
        <div class="col-md-6 mt-2">
            <label for="task_due_date" class="form-label"> Task Due Date</label>
            <input type="datetime-local" class="form-control" id="task_due_date" name="task_due_date" placeholder="Task Due Date">
        </div>
        <div class="col-md-6 mt-2">
            <label for="task_priority" class="form-label" > Task Priority</label>
            <input type="number" class="form-control" id="task_priority" name="task_priority" placeholder="Task Priority">
        </div>
        <div class="col-md-12 mt-2">
            <label for="task_description" class="form-label"> Task Description</label>
            <textarea rows="4" class="form-control" id="task_description" name="task_description" placeholder="Task Description"></textarea>
        </div>
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>