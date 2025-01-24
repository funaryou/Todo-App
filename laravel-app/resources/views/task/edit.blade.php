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
    <form method="POST" action={{ route("task.update",["id" => $tasks["id"]]) }}>
        @method('PUT')
        @csrf
        
        title:<input type="text" name="name" value={{$tasks["name"]}}>
        <br>
        
        content:<textarea name="content" required>{{$tasks["content"]}}</textarea>
        <button type="submit">セーブ</button> <button> キャンセル</button>
    </form>
</body>
</html>