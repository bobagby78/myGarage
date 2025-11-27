<?php
    $url = "https://vpic.nhtsa.dot.gov/api/vehicles/getallmakes?format=json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $vehicleMakes = [];
    $vehicleMakesData = json_decode($response, true);
    foreach($vehicleMakesData["Results"] as $vehicleMake){
        foreach($vehicleMake as $vehicleMakeName){
            array_push($vehicleMakes, $vehicleMakeName);
        }
    }
    var_dump($vehicleMakes);

?>


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
        <input class="form-control" id="vehicle-odometer" type="text" name="odometer" placeholder="Odometer or Hours">

        <!-- <select class="form-select" name="vehicle-make" id="vehicle-make"> -->
        <!-- <option value="select">Select a vehicle manufacturer</option> -->
        <!-- add vehicle make options here, from database (or API) -->
        <!-- </select> -->
        <input type="submit" class="btn btn-success" value="Add Vehicle">
    </form>
</div>
