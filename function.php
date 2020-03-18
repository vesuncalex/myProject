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
    }if (strlen($error_subject) == 0){
        $error_subject = "Write subject to message!";
        $error = true;
    }if (strlen($error_message) == 0){
        $error_message = "Write message!";
        $error = true;
    }
}

?>
<DOCTYPE html>
<html>
  <head>
     <title>

     </title>
  </head>
  <body>
  <form action="" method="post">
     Откого <input type="text" name="from"><span style="color: red;"><?=$error_from?></span><br><br>
    Кому <input type="text" name="to"><span style="color: red;"><?=$error_to?></span><br><br>
    Тема  <input type="text" name="subject"><span style="color: red;"><?=$error_subject?></span><br><br>
     <h4>Сообщение</h4><br><br>
      <textarea name="message" cols="30" rows="10"></textarea><span style="color: red;"><?=$error_message?></span><br><br>
      <button type="submit" name="send">Отправить</button>
  </form>
  </body>
</html>