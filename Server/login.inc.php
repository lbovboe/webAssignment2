<?php

if (isset($_POST['login-submit'])) {
    require "dbh.php";

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../webclient/index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT*FROM users WHERE username=? OR emailusers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../webclient/index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['userpwd']);
                if ($pwdCheck == false) {
                    header("Location: ../webclient/index.php?error=wrongpwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['idnum'] = $row['id'];
                    $_SESSION['name'] = $row['username'];

                    header("Location: ../webclient/index.php?login=success");
                    exit();
                } else {
                    header("Location: ../webclient/index.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../webclient/index.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../webclient/index.php");
    exit();
}
