
@extends('navbar')

{{--
    the @ symbol replaces the terrible starting and ending tags
    so its much more cleaner

    the {{<variable>}} is a quicker way to access variables without
        using the <"?"php"?"> for cleaner code
--}}

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/todolist.css') }}">
    </head>
    <h1>{{ $heading }}</h1>
    @if($tasks == null || count($tasks) == 0)
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
                <tr>
                    <td>
                        <button type="submit" name="edit" value="<?php{{  $task['id'] }}?>">
                            <i class="fa fa-pencil"></i>
                        </button>
                    </td>
                    @if($task['status'] == 1)
                        <td><p><s>{{ $task['task'] }}</s></p></td>
                        <td class="center">
                            <input type="checkbox" name="status" value="<?php{{  $task['id'] }}?>" checked>
                        </td>
                    @else
                        <td><p>{{ $task['task'] }}</p></td>
                        <td class="center">
                            <input type="checkbox" name="status" value="<?php{{  $task['id'] }}?>">
                        </td>
                    @endif
                    <td class="center">
                        <button type="submit" name="delete" value="<?php{{  $task['id'] }}?>">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            <br>
            <tr>
                <td></td>
                <td><input type="text" name="" placeholder="Input Task" style="width:100%;"></td>
                <td class="center">
                    <button type="submit" value="add">
                        <i class="fa fa-plus">Add Task </i>
                    </button>
                </td>
                <td><p><i class="fa fa-point"></i> </p></td>
            </tr>
        </table>
    @endif

    <form action="" method="POST">
        <table>

        </table>
    </form>
@endsection
