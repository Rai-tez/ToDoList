
@extends('navbar')

{{--
    the @ symbol replaces the terrible starting and ending tags
    so its much more cleaner

    the {{<variable>}} is a quicker way to access variables without
        using the <"?"php"?"> for cleaner code
--}}

@section('content')

    <h1>{{ $heading }}</h1>
    @if($tasks == null || count($tasks) == 0)
        <h1>No tasks for now!</h1>
    @else
        <table>
            <tr>
                <th></th>
                <th>Task</th>
                <th>Status</th>
                <th>Delete Task</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td><i class="fa fa-pencil"></i></td>
                    @if($task['status'] == 1)
                        <td><p><s>{{ $task['task'] }}</s></p></td>
                        <td>
                            <input type="checkbox" value="status" checked>
                        </td>
                    @else
                        <td><p>{{ $task['task'] }}</p></td>
                        <td>
                            <input type="checkbox" value="status">
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    @endif

<div>

</div>
@endsection
