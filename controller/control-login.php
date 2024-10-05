<?php
session_start();

if (isset($_POST['login'])) {
    $users = [
        [
            "name" => "Sani",
            "email" => "sani@gmail.com",
            "password" => "12345678",
        ],
        [
            "name" => "Ahmad",
            "email" => "ahmad@gmail.com",
            "password" => "12345678",
        ],
        [
            "name" => "Budi",
            "email" => "budi@gmail.com",
            "password" => "12345678",
        ],
        [
            "name" => "Caca",
            "email" => "caca@gmail.com",
            "password" => "12345678",
        ],
    ];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkedLogin = false;

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['name'] = $user['name'];
            $checkedLogin = true;
            break;
        }
    }

    if ($checkedLogin) {
        header("Location: ../dashboard.php");
    } else {
        header("Location: ../login.php?error=login-gagal");
    }
}
