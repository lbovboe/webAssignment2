<?php
if (isset($_POST["signup-submit"])) {
    require "dbh.php";
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../WebClient/signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../WebClient/signup.php?error=invalidmailuid");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../WebClient/signup.php?error=invalidmail&uid=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../WebClient/signup.php?error=invaliduid&mail=" . $email);
        exit();
    } elseif ($password !== $passwordRepeat) {
        header("Location: ../WebClient/signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT userName FROM users WHERE userName =? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../WebClient/signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: ../WebClient/signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (userName,emailusers,userpwd) VALUES(?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../WebClient/signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../WebClient/signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../WebClient/signup.php");
    exit();
}
