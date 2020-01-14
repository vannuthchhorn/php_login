<?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($password) && empty($username)) {
            header('Location:goback.php');
        } else if ($username == "admin" && $password == "password") {
            header('Location:loginsucess.php');
        }else {
            header('Location:noaccount.php');
        }

    }

    if (isset($_POST['register'])) {
        header('Location:register.php');
    }
    if (isset($_POST['back'])) {
        header('Location:index.php');
    }


    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = $_POST['message'];
        $email = $_POST['email'];
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] =$password;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        if (empty($username) && empty($password) && empty($email)) {
            header('Location:backregister.php');
        }else {
            header('Location:registerlogout.php');
        }
    }
    if (isset($_POST['fail'])) {
        header('Location:index.php');
    }

    if(isset($_POST['logout'])) {
        header('Location:index.php');
    }
    if(isset($_POST['fail'])) {
        header('Location:register.php');
    }
?>