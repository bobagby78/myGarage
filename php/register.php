<?php
include './cfg.php';
session_set_cookie_params(0, '/', '', true, true); // Lifetime 0 means until the browser is closed
session_start();

/**
 * on POST request, 
 * if email is in DB, inform as such
 * if username exists in DB, inform as such
 * 
 * on successful register, redirect to index page for login
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * snag input from post request
     */
    $username = $_POST['registerUsername'];
    $password = $_POST['registerPassword'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm'];
    $hashPass = password_hash($_SESSION['password'], PASSWORD_BCRYPT);


    //query the DB for username and email
    $sqlCheckDup = "SELECT * FROM users WHERE email = :email or username = :username";
    $stmt = $pdo->prepare($sqlCheckDup);
    $stmt->execute(['email' => $email, 'username' => $username]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (!empty($result)) {
        //if email exists, alert that the email is already in use
        foreach ($result as $r) {
            if ($r['email'] == $email) {
                var_dump($r['email']);
                echo "<script type='text/javascript'>alert('Your email has an account. Recover?');
                window.location.replace('/public');
                </script>";
                // sleep(15);
                // header("location:/public");
            }
            if ($r['username'] == $username) {
                var_dump($r['username']);
                echo "<script type='text/javascript'>alert('You chose poorly, try another username.');
                window.location.replace('/public');
                </script>";
                // sleep(15);
                // header('location:/public');
            }
        }
    } else {
        if ($password === $confirm) {
            /**
             * set session vars
             */
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $sqlAddUser = "INSERT into users (email, username, password) values (:email, :username, :password)";
            $stmtAddUser = $pdo->prepare($sqlAddUser);
            $stmtAddUser->execute(['email' => $email, 'username' => $username, 'password' => $hashPass]);
            echo "  <script type='text/javascript'>
                    alert('Congrats, you are now registered! redirecting for initial login'); window.location.replace('/public');
                    </script>";
        } else {
            echo "  <script type='text/javascript'>
                    alert('Passwords do not match!!'); window.location.replace('/public');
                    </script>";
        }
    }

    //TODO: set up password reset via email.

    //if username exists, alert that username is in use, pick another. 
}
