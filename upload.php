<?php
if (isset($_POST["send"])){
    $from =htmlspecialchars($_POST["from"]);
    $to =htmlspecialchars($_POST["to"]);
    $subject =htmlspecialchars($_POST["subject"]);
    $message =htmlspecialchars($_POST["message"]);
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = false;
    if ($from == "" || !preg_match("/@/./w{2+}")){
        $error_from = "Write corecte mail!";
        $error = true;
    }if ($from == "" || !preg_match("/@/./w{2+}")){
        $error_to = "Write corecte mail!";
        $error = true;
    }if ($from == ""){
        $error_subject = "Write subject to message!";
        $error = true;
    }if ($from == "" ){
        $error_from = "Write message!";
        $error = true;
    }
}

