@extends("layouts.app")

@section("content")
    <div class="panel-body">
        <form action = "/task" method = "POST" class = "form-horizontal">
            {{ csrf_field() }}
            <!-- Task name here -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control"/>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus">Add Task</i>
                    </button>
                </div>
            </div>

        </form>
    </div>

 @endsection
