<?php
echo "acces";



if (empty($email)){
    $_SESSION['email'] = $_POST["email"];
    header('Location: /register');
}if (empty($password)){
    $_SESSION['password'] = $_POST["password"];
    header('Location: /register');
}else {
    $attributes = ['email' => $email, 'password' => $password];
    $columns = ["`id`"];
    $where = '';
    foreach ($attributes as $key => $values) {
        $key = '`' . $key . '`';
        $values = "'" . $values . "'" . ",";
        $where = $where . $key . '=' . $values;
    }