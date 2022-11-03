<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="お客様情報">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お客様情報</title>
    </head>

    <body>
        <h2>入力内容をご確認ください。</h2>
        <form action="cofirmation" method="post">
            <p>お名前:<?php ['name']; ?></p>
            <p>フリガナ:<?php echo $_POST['hurigana']; ?></p>
            <p>メールアドレス:<?php echo $_POST['email']; ?></p>
            <p>電話番号:<?php echo $_POST['tel']; ?></p>
            <p>お問い合わせ内容：<?php echo $_POST['message']; ?></p>
            <p>ご希望の連絡先：<?php echo $_POST['contact']; ?></p>
        </form>
    </body>
</html>