<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="課題">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>課題</title>
    </head>
    <body>
        <h2>点数(1~100)を入力してください！</h2>
        <form action="Homework_confirm" method="post">
        @csrf
            <div>
                <input type = "text" name = "number">
                <input type = "submit" name = "submit" value = "送信">
            </div> 
        </form>         
    </body>

</html>
    
