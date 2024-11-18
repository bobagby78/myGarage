<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Maintanance Log</title>

</head>

<body>
    <?php include "../header.php"; ?>
    <div class='container'>

        <form action="">
            <h1>New Maintenance Log</h1>

            <h2 class="maint-header">Hood-poppers</h2>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="engineOillevel" id="oilCheck">
                    <label class="form-check-label" for="oilCheck">Check/Top Engine Oil</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="washFluidevel" id="washerCheck">
                    <label class="form-check-label" for="washerCheck">Check/Top Washer Fluid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="coolantLevel" id="coolantCheck">
                    <label class="form-check-label" for="coolantCheck">Check/Top Coolant</label>
                </div>
            </div>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="brakeFluidLevel" id="brakeFluidCheck">
                    <label class="form-check-label" for="brakeFluidCheck">Check/Top Brake Fluid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="TransFluidLevel" id="transFluidCheck">
                    <label class="form-check-label" for="transFluidCheck">Check/Top Transmission Fluid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="steeringFluidLevel" id="steeringFluidCheck">
                    <label class="form-check-label" for="steeringFluidCheck">Check/Top Power Steering Fluid</label>
                </div>
            </div>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="wiperIntegrity" id="wiperCheck">
                    <label class="form-check-label" for="wiperCheck">Check Wiper Integrity</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="voltageCheck" id="voltageCheck">
                    <label class="form-check-label" for="voltageCheck">Battery Voltage Check</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="terminalClean" id="terminalCheck">
                    <label class="form-check-label" for="terminalCheck">Battery Terminal Clean</label>
                </div>
            </div>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="tirePressure" id="tirePressure">
                    <label class="form-check-label" for="flexCheckDefault">Check/Top Tire Pressure</label>
                    <br>
                    <label for="frontPressure">Tire Pressure Front</label>
                    <input id="frontPressure" placeholder="32 PSI" type="text">
                    <br>
                    <label for="rearPressure">Tire Pressure Rear</label>
                    <input id="rearPressure" placeholder="32 PSI" type="text">
                </div>
            </div>

            <h2 class="maint-header">5,000 Milers</h2>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="tireRotation" id="tireRotation">
                    <label class="form-check-label" for="tireRotation">Tire Rotation</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="fuelFilterCheck" id="fuelFilterCheck">
                    <label class="form-check-label" for="fuelFilterCheck">Check/Replace Fuel Filter</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="airFilterReplace" id="airFilterReplace">
                    <label class="form-check-label" for="airFilterReplace">Check/Replace Air Filter</label>
                </div>
            </div>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="bulbCheck" id="bulbCheck">
                    <label class="form-check-label" for="bulbCheck">Check/Replace bulbs</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="tireCheck" id="tireCheck">
                    <label class="form-check-label" for="tireCheck">Check Tire Integrity</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="brakeCheck" id="brakeCheck">
                    <label class="form-check-label" for="braleCheck">Check Brake Integrity</label>
                </div>
            </div>
            <br>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="oilChange" id="oilChange">
                    <label class="form-check-label" for="oilChange">Oil Change</label>
                    <br>
                    <label for="oilType">Oil Type and Weight</label>
                    <input id="oilType" placeholder="BrandX 10W20 Synthetic High-Mileage" type="text">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="filterReplace" id="filterReplace">
                    <label class="form-check-label" for="oilChange">Replace Oil Filter</label>
                    <br>
                    <label for="oilFilterType">Oil Filter Identification</label>
                    <input id="oilFilterType" placeholder="BrandX OF4235" type="text">
                </div>
            </div>
            <h2 class="maint-header">10,000 Milers</h2>
            <div class="mx-2 new-maint-section">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="alignment" id="alignment">
                    <label class="form-check-label" for="alignment">Alignment</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="brakeReplace" id="brakeReplace">
                    <label class="form-check-label" for="brakeReplace">Brakepad replacement and Disk Check</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="exhaustCheck" id="exhaustCheck">
                    <label class="form-check-label" for="exhaustCheck">Exhaust System Integrity Check</label>
                </div>
            </div>
        </form>
        <input id="log-maint-button" class="btn btn-success" type="submit" value="Log Maintenance">

    </div>
</body>

</html>