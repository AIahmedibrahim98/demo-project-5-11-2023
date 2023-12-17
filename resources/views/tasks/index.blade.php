<x-app>
    <x-slot name='title'>Tasks Page</x-slot>
    <x-slot name='header'>Tasks</x-slot>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">due date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Assign To</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->task_type->name }}</td>
                        {{-- <td>{{ $task->task_type }}</td>
                        <td>{{ $task->user_name }}</td> --}}
                        <td>{{ date_format(date_create($task->created_at), 'Y-m-d h:i:s a') }}</td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="7" scope="row">
                            <h3 class="text-center">No Data Found</h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-app>
