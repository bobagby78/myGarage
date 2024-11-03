<?php
include './session.php';
require './cfg.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * snag input from post request
     */
    $userId = $_SESSION['activeUserId'];
    $vehicleType = $_POST['type'];
    $vehicleYear = $_POST['vehicle-year'];
    $vehicleMake = $_POST['vehicle-make'];
    $vehicleModel = $_POST['vehicle-model'];

    $sqlAddCar = "INSERT INTO garage (user_id, vehicle_type, vehicle_year, make, model) 
                                VALUES(:activeUserId, :vehicleType, :vehicleYear, :vehicleMake, :vehicleModel)";
    $stmt = $pdo->prepare($sqlAddCar);
    $stmt->execute([
        'activeUserId' => $userId,
        'vehicleType' => $vehicleType,
        'vehicleYear' => $vehicleYear,
        'vehicleMake' => $vehicleMake,
        'vehicleModel' => $vehicleModel
    ]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
}
