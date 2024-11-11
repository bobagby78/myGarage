<?php
include '../session.php';
require '../cfg.php';

if (!isset($_SESSION['activeUser'])) {
    echo "<script type='text/javascript'>alert('You must be logged in to use this feature');
    window.location.replace('/public');
    </script>";
}

$userId = $_SESSION['activeUserId'];

$sqlGetVehicles = "SELECT * from garage where user_id = :id";
$stmt = $pdo->prepare($sqlGetVehicles);
$stmt->execute(['id' => $userId]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $vehicle) {
    $vehicleCard = "
        <div>
            <span>Vehicle</span>
            <span>{$vehicle['make']}</span>
        </div>
    ";
}

$carsArr = [];
$trucksArr = [];
$cyclesArr = [];
$lawnArr = [];
$otherArr = [];

foreach ($result as $vehicle) {
    /**switch case for vehicle types to push each vehicle to arrays*/
    switch ($vehicle['vehicle_type']) {
        case 'car':
            array_push($carsArr, $vehicle);
            break;
        case 'truck':
            array_push($trucksArr, $vehicle);
            break;
        case 'motorcycle':
            array_push($cyclesArr, $vehicle);
            break;
        case 'lawn':
            array_push($lawnArr, $vehicle);
            break;
        case 'other':
            array_push($$otherArr, $vehicle);
            break;
    }
}


?>
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
                <?php if (!empty($carsArr)): ?>
                    <?php foreach ($carsArr as $car): ?>
                        <div>
                            <table class="vehicle-table">
                                <tr class="vehicle-table">
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Latest Maintenance</th>
                                    <th>Log Maintenance</th>
                                </tr>
                                <tr class="vehicle-table">
                                    <td><?= $car['vehicle_year'] ?></td>
                                    <td><?= $car['make'] ?></td>
                                    <td><?= $car['model'] ?></td>
                                    <td>Latest Maintenance</td>
                                    <td><button class="btn btn-warning">Log Maintenance</button></td>
                                </tr>

                            </table>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <h4 class="garage-heading">My Trucks</h4>
            <div class="garage-section">
                <?php if (!empty($trucksArr)): ?>
                    <?php foreach ($trucksArr as $truck): ?>
                        <div>
                            <table class="vehicle-table">
                                <tr class="vehicle-table">
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Latest Maintenance</th>
                                    <th>Log Maintenance</th>
                                </tr>
                                <t>
                                    <td><?= $truck['vehicle_year'] ?></td>
                                    r <td><?= $truck['make'] ?></td>
                                    <td><?= $truck['model'] ?></td>
                                    <td>Latest Maintenance</td>
                                    <td><button class="btn btn-warning">Log Maintenance</button></td>
                                </t>
                            </table>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <h4 class="garage-heading">My Motorcycles</h4>
            <div class="garage-section">
                <?php if (!empty($carsArr)): ?>
                    <?php foreach ($cyclesArr as $cycle): ?>
                        <div>
                            <table class="vehicle-table">
                                <tr class="vehicle-table">
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Latest Maintenance</th>
                                    <th>Log Maintenance</th>
                                </tr>
                                <tr class="vehicle-table">
                                    <td><?= $cycle['vehicle_year'] ?></td>
                                    <td><?= $cycle['make'] ?></td>
                                    <td><?= $cycle['model'] ?></td>
                                    <td>Latest Maintenance</td>
                                    <td><button class="btn btn-warning">Log Maintenance</button></td>
                                </tr>
                            </table>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <h4 class="garage-heading">My Lawn Equipmnt</h4>
            <div class="garage-section">
                <?php if (!empty($lawnArr)): ?>
                    <?php foreach ($lawnArr as $lawn): ?>
                        <div>
                            <table class="vehicle-table">
                                <tr class="vehicle-table">
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Latest Maintenance</th>
                                    <th>Log Maintenance</th>
                                </tr>
                                <tr class="vehicle-table">
                                    <td><?= $lawn['vehicle_year'] ?></td>
                                    <td><?= $lawn['make'] ?></td>
                                    <td><?= $lawn['model'] ?></td>
                                    <td>Latest Maintenance</td>
                                    <td><button class="btn btn-warning">Log Maintenance</button></td>
                                </tr>
                            </table>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <h4 class="garage-heading">Other</h4>
            <div class="garage-section">
                <?php if (!empty($carsArr)): ?>
                    <?php foreach ($otherArr as $other): ?>
                        <div>
                            <table class="vehicle-table">
                                <tr class="vehicle-table">
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Latest Maintenance</th>
                                    <th>Log Maintenance</th>
                                </tr>
                                <tr class="vehicle-table">
                                    <td><?= $other['vehicle_year'] ?></td>
                                    <td><?= $other['make'] ?></td>
                                    <td><?= $other['model'] ?></td>
                                    <td>Latest Maintenance</td>
                                    <td><button class="btn btn-warning">Log Maintenance</button></td>
                                </tr>
                            </table>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="add-vehicle col-4">
            <form class="" id="add-vehicle" action="/crudGarage.php" method="post">
                Add a Vehicle
                <select class="form-select" name="type" id="new-vehicle-type">
                    <option value="none">Select a vehicle type</option>
                    <option name="car" value="car">Car</option>
                    <option name="truck" value="truck">Truck</option>
                    <option name="motorcycle" value="motorcycle">Motorcycle</option>
                    <option name="lawn" value="lawn">Lawn Equipment</option>
                    <option name="other" value="other">Other</option>
                </select>
                <input class="form-control" id="vehicle-year" type="text" name="vehicle-year" placeholder="Year: YYYY">
                <input class="form-control" id="vehicle-make" type="text" name="vehicle-make" placeholder="Make">
                <input class="form-control" id="vehicle-model" type="text" name="vehicle-model" placeholder="Model">
                <!-- <select class="form-select" name="vehicle-make" id="vehicle-make"> -->
                <!-- <option value="select">Select a vehicle manufacturer</option> -->
                <!-- add vehicle make options here, from database (or API) -->
                <!-- </select> -->
                <input type="submit" class="btn btn-success" value="Add Vehicle">
            </form>
        </div>
    </div>
</body>

</html>