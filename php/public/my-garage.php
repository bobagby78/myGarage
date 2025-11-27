<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/styles.css">
    <title>My Garage</title>
</head>

<body>
    <div class="container">
        <?php
        include "./header.php";
        ?>
        <h2>My Garage</h2>
        <div>
            <h4 class="garage-heading">My Cars</h4>
            <div class="garage-section">
                <span>Car 1</span>
                <span>Car 2</span>
            </div>
            <h4 class="garage-heading">My Trucks</h4>
            <div class="garage-section">

            </div>
            <h4 class="garage-heading">My Motorcycles</h4>
            <div class="garage-section">

            </div>
            <h4 class="garage-heading">My Lawn Equipmnt</h4>
            <div class="garage-section">

            </div>
            <h4 class="garage-heading">Other</h4>
            <div class="garage-section">

            </div>

        </div>
        <div class="add-vehicle col-4">
            <form class="" id="add-vehicle" action="post">
                Add a Vehicle
                <select class="form-select" name="type" id="new-vehicle-type">
                    <option value="none">Select a vehicle type</option>
                    <option value="car">Car</option>
                    <option value="truck">Truck</option>
                    <option value="motorcycle">Motorcycle</option>
                    <option value="lawn">Lawn Equipment</option>
                    <option value="other">Other</option>
                </select>
                <input class="form-control" id="vehicle-year" type="text" placeholder="Year: YYYY">
                <input class="form-control" id="vehicle-make" name="vehicle-make" type="text" placeholder="Make">
                <input class="form-control" id="vehicle-model" name="vehicle-model" type="text" placeholder="Model">
                <input type="submit">
                <!-- <select class="form-select" name="vehicle-make" id="vehicle-make" -->
                <!-- <option value="select">Select a vehicle manufacturer</option> -->
                <!-- add vehicle make options here, from database (or API) -->
                <!-- </select> -->
            </form>
        </div>

    </div>
</body>

</html>