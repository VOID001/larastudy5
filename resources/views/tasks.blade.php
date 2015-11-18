@extends("layouts.app")

@section("content")
    <div class="panel-body">
        @include('common.errors')
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


        <!-- Show current Tasks -->
        @if(count($tasks) > 0)
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Current Tasks
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Tasks
                            </th>
                            <th>
                                Time/Finish Time
                            </th>
                            <th>
                                Operation
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>

                    <!--Table Body-->
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td class="table-hover">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td class="t">
                                    @if($task->isfinish == false)
                                        <div>{{ $task->created_at }}</div>
                                    @else
                                        <div class="text-success">{{ $task->finish_at }}</div>
                                    @endif
                                </td>

                                <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger"> Delete Task </button>
                                    </form>
                                </td>

                                <td>
                                    @if($task->isfinish == false)
                                        <form action="/finish/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-warning">Pending, Click to Finsh</button>
                                        </form>
                                    @else
                                        <button class="btn btn-success">Finished</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

 @endsection
