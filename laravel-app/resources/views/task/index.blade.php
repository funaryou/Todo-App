<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ToDoLiSt</h1>
    <a href={{ route("task.create") }}>タスク追加</a>
    <br><br><br><br><br><br>
    @foreach ($tasks as $task)
    <table>
        <tr>
            <td>{{$task["name"]}}</td>
            <td>{{$task["content"]}}</td>
            <td>{{$task["tag"]}}</td>
            <!--<td>{{ $task->created_at }}</td>--> <!-- 作成日時を表示 -->
            {{-- <td>{{ $task->updated_at }}</td> --}}
            <td><a href={{ route("task.edit", ['id' => $task->id]) }}>編集</a></td>
            <td>
                <form method="POST" action={{ route("task.delete", ['id' => $task->id]) }}>
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </td>
            <td><br></td>
        </tr>
    </table>
    @endforeach
    @foreach ($tags as $tag)
    <table>
        <tr>
            <td>{{$tag["name"]}}</td>
        </tr>
    </table>
    @endforeach
</body>
</html>