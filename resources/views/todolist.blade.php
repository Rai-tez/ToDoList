
@extends('partials/header_footer')

{{--
    the @<keyword> syntax replaces the terrible starting and ending tags
    so its much more cleaner

    the {{<variable>}} is a quicker way to access variables without
        using the <"?"php"?"> for cleaner code
--}}

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/todolist.css') }}">
    </head>
    <div class="todolist-block">
        @if($tasks == null)
            <h1 class="center">No tasks for now!</h1>
        @else
            <table style="margin-top: 10vh">
                <tr>
                    <th></th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
                @foreach($tasks as $task)
                    <x-task-card :task="$task"/>
                @endforeach
                <br>
                <tr>
                    <td></td>
                    <td><input type="text" name="" placeholder="Input Task" style="width:100%;"></td>
                    <td class="center">
                        <button type="submit" value="add">
                            <i class="fa fa-plus">Add Task</i>
                        </button>
                    </td>
                    <td><p><i class="fa fa-point"></i> </p></td>
                </tr>
            </table>
        @endif
    </div>
@endsection
