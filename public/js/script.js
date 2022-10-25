'use strict';

/* 名前が未入力の時に送信ボタンを押した際、
alert文で名前が入力されていませんというalertを出すようにしてください。 */
const submit = document.getElementById("submit-input");
const name = document.getElementById("name-input");
const hurigana = document.getElementById("hurigana-input");
const email = document.getElementById("email-input");
const tel = document.getElementById("tel-input");
const info = document.getElementById("info-textarea");
const radio = document.getElementsByClassName("radiobutton");
const errorMesssage = document.getElementById('errorMessage');

let check = () => {
    let error = "必須項目です。";
    
    //let message = "";

    if (name.value =="") {
        document.getElementById("errorMessage").innerHTML = error;
        // \n　⇦改行
        //message+=("名前を入力してください\n");
        
        // alert("名前を入力してください");
        // return false;
    }
    if (hurigana.value =="") {
        document.getElementById("errorMessage1").innerHTML = error;
        //message+=("フリガナを入力してください\n");
        
        // alert("フリガナを入力してください");
        // return false;
    }
    if (email.value =="") {
        document.getElementById("errorMessage2").innerHTML = error;
        //message+=("メールアドレスを入力してください\n")
        
        //alert("メールアドレスを入力してください");
        //return false;
    }
    if (tel.value =="") {
        document.getElementById("errorMessage3").innerHTML = error;
        //message+=("電話番号を入力してください\n");
        
        //alert("電話番号を入力してください");
        //return false;
    }
    if (info.value=="") {
        document.getElementById("errorMessage4").innerHTML = error;
        //message+=("お問い合わせ内容を入力してください\n");
        
        //alert("お問い合わせ内容を入力してください");
        //return false;
    }
    if (radio.value="") {
        document.getElementById("errorMessage5").innerHTML = error;
        //message+=("ご希望の連絡先にチェックをしてください\n");
        
        //alert("ご希望の連絡先にチェックをしてください");
        //return false;
    }
    /* if (message.value != "") {
        alert(message);
        return false;
    } */
    return false;
}

    



