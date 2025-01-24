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
    <form method="POST" action={{ route("task.store") }}>
        @csrf
        title:<input type="text" name="name">
        <br>
        content:<textarea placeholder="メッセージを入力" name="content"></textarea>
        <br>
        tag:<input type="text" name="tag">
        <button type="submit">追加</button> <button> キャンセル</button>
    </form>
</body>
</html>