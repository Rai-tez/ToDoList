@props(['task'])

<tr>
    <td>
        <button type="submit" class="dml-buttons" name="edit" value="{{  $task['id'] }}">
            <i class="fa fa-pencil"></i>
        </button>
    </td>
    <br>
    @if($task['status'] == 1)
        <td><p><s>{{ $task['task'] }}</s></p></td>
        <td class="center" style="">
            <input type="checkbox" name="status" value="{{  $task['id'] }}" checked>
        </td>
        <br>
    @else
        <td><p>{{ $task['task'] }}</p></td>
        <td class="center">
            <input type="checkbox" name="status" value="{{   $task['id']  }}">
        </td>
        <br>
    @endif
    <td class="center">
        <button type="submit" class="dml-buttons" name="delete" value="{{  $task['id'] }}">
            <i class="fa fa-trash"></i>
        </button>
    </td>
</tr>
