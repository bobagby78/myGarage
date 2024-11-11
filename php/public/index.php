<?php
include('../session.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/styles.css">
    <title>Tinker Town</title>
</head>

<body>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
    <title>index.php</title>

    <div class="container">
        <?php
        include "./header.php";
        ?>

        <h1>Welcome to the Home Mechanic's Garage</h1>
        <div class="col-4" id="nav-panel-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form class="mt-2" action="/login.php" method="POST">
                        <div class="mt-2 form-group">
                            <label for="username"> Username or Email</label>
                            <input class="form-control" type="text" name="loginUsername" id="username">
                        </div>
                        <div class="mt-2 form-group">
                            <label for="password"> Password </label>
                            <input class="form-control" type="password" name="loginPassword" id="password">
                        </div>
                        <div class="mt-2 submit-btn">
                            <input class="mt-3 btn btn-success" type="submit" value="Enter the garage">
                        </div>
                    </form>

                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <form class="mt-2" action="/register.php" method="POST">
                        <div class="mt-2 form-group">
                            <label for="username"> Email</label>
                            <input class="form-control" type="text" name="email" id="email">
                        </div>
                        <div class="mt-2 form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="registerUsername" id="username>
                        </div>
                        <div class=" mt-2 form-group">
                            <label for="password"> Password </label>
                            <input class="form-control" type="password" name="registerPassword" id="password">
                        </div>
                        <div class=" mt-2 form-group">
                            <label for="confirm-password"> Re-type Password </label>
                            <input class="form-control" type="password" name="confirm" id="confirm-password">
                        </div>
                        <div class="mt-2 submit-btn">
                            <input class="mt-3 btn btn-success" type="submit" value="Register">
                        </div>
                    </form>
                </div>
                <a href="/signOut.php" class="logout"><button type="button" class="btn btn-danger">Log Out</button></a>
                <div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>