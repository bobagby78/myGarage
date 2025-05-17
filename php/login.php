<?php
//set cookie params and start session
include('./cfg.php');
require_once './public/classes/User.php';
include './session.php';



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
        $activeUser = $_SESSION['activeUser'] = new User($result['user_id'], $result['email'], $result['username'], $result['password']);
        echo "<script type='text/javascript'>alert('Welcome, $activeUser->username');
        window.location.replace('/public');
        </script>";
    }
}
