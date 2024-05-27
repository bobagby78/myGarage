<?php
session_start();
$_SESSION['test'] = 'test value';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
    <title>Tinker Town</title>
</head>

<body>
    <title>index.php</title>

    <div class="container">

        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
            <li class="nav-item"><a href="/public/my-garage.php" class="nav-link">My Garage</a></li>
            <li class="nav-item"><a href="/public/maintenance.php" class="nav-link">Maintenance Schedule</a></li>
            <li class="nav-item"><a href="/public/notes.php" class="nav-link">Notes</a></li>
        </ul>

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
                    <form class="mt-2" action="post">
                        <div class="mt-2 form-group">
                            <label for="username"> Please enter your username or email</label>
                            <input class="form-control" type="text" name="username" id="username">
                        </div>
                        <div class="mt-2 form-group">
                            <label for="password"> Please enter your username or email</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <div class="mt-2 submit-btn">
                            <input class="mt-3 btn btn-success" type="submit" value="Enter the garage">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    REGISTER FORM GOES HERE
                </div>

                <div>
                    <p><?= print_r($_SESSION); ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>