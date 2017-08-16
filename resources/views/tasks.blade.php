
                <table class="table table-bordered">
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->priority }}</td>
                        <td>{{ $task->status }}</td>
                        <td><a href="/tasks/{{$task->id}}" title="View Detail">View Detail</a></td>
                    </tr>
                    @endforeach
                </table>
