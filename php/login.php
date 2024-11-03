<?php
//set cookie params and start session
include './session.php';
include('./cfg.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $sqlLogin = "SELECT * from users where username = :username or email = :username;";
    $stmt = $pdo->prepare($sqlLogin);
    $stmt->execute(['username' => $username]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $result[0];

    if (empty($result) || !password_verify($password, $result['password'])) {
        echo "<script type='text/javascript'>alert('Something went wrong. Username or Password do not found');
        window.location.replace('/public');
        </script>";
    } else {
        //set $_SESSION params, alert welcome msg, eventually redirect to my garage page for user
        $_SESSION['activeUser'] = $result['username'];
        $_SESSION['activeUserId'] = $result['user_id'];
        $activeUser = $_SESSION['activeUser'];
        $activeUserId = $_SESSION['user_id'];
        echo "<script type='text/javascript'>alert('Welcome, $activeUser');
        window.location.replace('/public');
        </script>";
    }
}

// header("Location: /public");
