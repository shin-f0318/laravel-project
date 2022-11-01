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
    let flag = 0;

    if (name.value =="") {
        flag = 1;
    }else if (hurigana.value =="") {
        flag = 2;
    }else if (email.value =="") {
        flag = 3;
    } else if (tel.value =="") {
        flag = 4;
    } else if (info.value=="") { 
        flag = 5;
    }else if (radio.value="") {
        flag = 6;
    } else if (flag == 1) {
        document.getElementById("errorMessage").innerHTML = error;
        return false;
    } else if (flag == 2) {
        document.getElementById("errorMessage1").innerHTML = error;
        return false;
    } else if (flag == 3) {
        document.getElementById("errorMessage2").innerHTML = error;
    } else if (flag == 4) {
        document.getElementById("errorMessage3").innerHTML = error;
        return false;
    } else if (flag == 5) {
        document.getElementById("errorMessage4").innerHTML = error;
        return false;
    } else if (flag == 6) {
        document.getElementById("errorMessage5").innerHTML = error;
        return false;
    } else if (flag == 0) {
        return true;
    }
}

    



