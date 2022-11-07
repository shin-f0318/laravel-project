<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="お客様情報">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お客様情報</title>
    </head>

    <body>
        <header>
            <h1>登録内容</h1>

            <nav id="contact-pc">
                <a href="introduction">introduction</a>
                <a href="portfolio">portfolio</a>
                <a href="contact">contact</a>
            </nav>

        </header>

        <h2>登録内容をご確認ください。</h2>
        <form action="confirmation" method="post">
            <p>お名前:{{$show_contact->name}}</p>
            <p>フリガナ:{{$show_contact->hurigana}}</p>
            <p>メールアドレス:{{$show_contact->email}}</p>
            <p>電話番号:{{$show_contact->tel}}</p>
            <p>お問い合わせ内容：{{$show_contact->message}}</p>
            <p>ご希望の連絡先：{{$show_contact->contact}}</p>
            <!-- <input type = submit name = 'submit'> -->
        </form>
    </body>
</html>