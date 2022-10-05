<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanban::Board</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <form class="mt-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Write Your Task ...">
                        <button class="mr-3 btn btn-outline-secondary" type="button" id="addtask">Add</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center mb-3">
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            To Do
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Task 01</li>
                                <li>Task 02</li>
                            </ul>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            In Progress
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Task 03</li>
                                <li>Task 04</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            Done
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Task 05</li>
                                <li>Task 06</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('board.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
