<!DOCTYPE html>
<html>
    <head>
        <title>お問い合わせ</title>
        <meta charset="utf-8">
        <meta name="description" content="お問い合わせ先">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/contact.css">
    </head>

    <body>
        <header>
            <h1>お問い合わせ</h1>

            <nav id="contact-pc">
                <a href="introduction">introduction</a>
                <a href="portfolio">portfolio</a>
                <a href="contact">contact</a>
            </nav>

        </header>
        
        <section id="contact">
        <form action="confirmation" method="post">
        @csrf
            <div>
                <div class="contact-heading">
                    <label class="contact-label">名前</label>
                    <br>
                    <span class="contact-span">必須</span>
                </div>
                <div class="contact-from">
                    <input type="text" id="name-input" name="name" placeholder="入力してください" class="contact-textbox">
                    <p id="errorMessage"></p>
                </div>
            </div>

            <div>
                <div class="contact-heading">
                    <label class="contact-label">フリガナ</label>
                    <br>
                    <span class="contact-span">必須</span>
                </div>
                <div>
                    <input type="text" id="hurigana-input" name="hurigana" placeholder="入力してください" class="contact-textbox">
                    <p id="errorMessage1"></p>
                </div>
            </div>
            
            <div>
                <div class="contact-heading">
                    <label class="contact-label">メールアドレス</label>
                    <br>
                    <span class="contact-span">必須</span>
                </div>
                <div>
                    <input type="text" id="email-input" name="email" placeholder="入力してください" class="contact-textbox">
                    <p id="errorMessage2"></p>
                </div>
            </div>

            <div>
                <div class="contact-heading">
                    <label class="contact-label">電話番号</label>
                    <br>
                    <span class="contact-span">必須</span>
                </div>
                <div>
                    <input type="text" id="tel-input" name="tel" placeholder="入力してください" class="contact-textbox">
                    <p id="errorMessage3"></p>
                </div>
            </div>

            <div>
                <div class="contact-heading">
                  <label class="contact-label">お問い合わせ内容</label>
                  <br>
                  <span class="contact-span">必須</span>
                </div>
                <div>
                  <textarea class="contact-textarea" id="info-textarea" placeholder="入力してください" name="message"></textarea>
                  <p id="errorMessage4"></p>
                </div>
            </div>

            <div>
                <div class="contact-heading">
                  <label class="contact-label">ご希望の連絡先</label>
                  <br>
                  <span class="contact-span">必須</span>
                </div>
                <div>
                  <input class="radiobutton" type="radio" value="電話" name="contact" checked><label>お電話</label>
                  <input class="radiobutton" type="radio" value="メール" name="contact"><label>メール</label>
                  <input class="radiobutton" type="radio" value="どちらでも" name="contact"><label>どちらでも</label>
                  <p id="errorMessage5"></p>
                </div>
            </div>
            
            <div class="submit">
                <input type="image" id="submit-input" value="submit" src="../images/contact/submit.png" onClick="return check();">
            </div>
        </form>
        </section>
        <footer>
            <div id="footer-link">
                <a href="index">Introduction</a>
                <a href="portfolio">Portfolio</a>
                <a href="contact">Contact</a> 
            </div>
        </footer>
        <script src="../js/script.js"></script>
    </body>

   
</html>