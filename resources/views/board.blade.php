<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanban::Board</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <form action="{{ url('add-todo-task')  }}" method="POST" class="mt-5">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="taskName" id="addtask" class="form-control" placeholder="Write Your Task ...">
                        <button class="mr-3 btn btn-outline-secondary" type="submit" id="addtaskbtn">Add</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center mb-3">
                <!-- To Do List  -->
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            TO DO
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-numbered" id="task-list">
                                @foreach($todoList as $todos)
                                    <li class="bg-light list-group-item task">{{ $todos->taskName }}
                                        <a href="{{ url('add-progress-task/' .$todos->id)  }}" class="btn btn-primary btn-sm ms-2 float-end"><i class="fa-solid fa-check"></i></a>
                                        <a href="{{ url('delete-todo-task/' .$todos->id)  }}" class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-minus"></i></a>
                                    </li>
                                @endforeach
                              </ul>
                        </div>
                    </div>
                </div>
                <!-- Progress List -->
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            In Progress
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-numbered" id="progress-list">
                                @foreach($progressList as $progress)
                                    <li class="bg-light list-group-item task">{{ $progress->progress }}
                                        <a href="{{ url('add-done-task/' .$progress->id)  }}" class="btn btn-primary btn-sm ms-2 float-end"><i class="fa-solid fa-check"></i></a>
                                        <a href="{{ url('delete-progress-task/' .$progress->id)  }}" class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-minus"></i></a>
                                    </li>
                                @endforeach
                              </ul>
                        </div>
                    </div>
                </div>
                <!-- Done List -->
                <div class="col-md-3 p-2 bd-highlight">
                    <div class="card">
                        <div class="card-header">
                            Done
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-numbered">
                                @foreach($doneList as $done)
                                    <li class="bg-light list-group-item task">{{ $done->done }}
                                        <a href="{{ url('delete-done-task/' .$done->id)  }}" class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-minus"></i></a>
                                    </li>
                                @endforeach
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- <script src="{{ asset('board.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
