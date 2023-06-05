
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maintenance</title>
    <script src="script.js">

    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button><a href="index.php">Back</a></button>
<!-- Added a better checkout form that will update the prices upon checkout-->
<div id="maintenanceForm">
    <form method="post" action="#" onsubmit="alert('no checking out'); return false">
        <fieldset>
            <legend>Services Offered</legend>
            <input type="checkbox" name="services" id="service01" value="service01" onchange="updateTotal()">
            Oil Change ()
            <br>
            <input type="checkbox" name="services" id="service02" value="service02" onchange="updateTotal()">
            Power Steering Fluid ()
            <br>
            <input type="checkbox" name="services" id="service03" value="service03" onchange="updateTotal()">
            Hoses ()
            <br>
            <input type="checkbox" name="services" id="service04" value="service04" onchange="updateTotal()">
            Belts ()
            <br>
            <input type="checkbox" name="services" id="service05" value="service05" onchange="updateTotal()">
            Cables ()
            <br>
            <input type="checkbox" name="services" id="service06" value="service06" onchange="updateTotal()">
            Automatic Transmission Fluid ()
            <br>
            <input type="checkbox" name="services" id="service07" value="service07" onchange="updateTotal()">
            Wiper Blades ()
            <br>
            <input type="checkbox" name="services" id="service08" value="service08" onchange="updateTotal()">
            Air Filter ()
            <br>
            <input type="checkbox" name="services" id="service09" value="service09" onchange="updateTotal()">
            Tire Rotation ()
            <br>
            <input type="checkbox" name="services" id="service10" value="service10" onchange="updateTotal()">
            Cooling System Flush ()
            <br>
            <input type="checkbox" name="services" id="service11" value="service11" onchange="updateTotal()">
            Battery Replacement ()
        </fieldset>

        <fieldset>
            <legend>Repair Services Offered</legend>
            <input type="checkbox" name="repairs" id="repairs01" value="repairs01" onchange="updateTotal()">
            Engine ()
            <br>
            <input type="checkbox" name="repairs" id="repairs02" value="repairs02" onchange="updateTotal()">
            Driveshaft ()
            <br>
            <input type="checkbox" name="repairs" id="repairs03" value="repairs03" onchange="updateTotal()">
            Muffler ()
            <br>
            <input type="checkbox" name="repairs" id="repairs04" value="repairs04" onchange="updateTotal()">
            Braking System ()
            <br>
            <input type="checkbox" name="repairs" id="repairs05" value="repairs05" onchange="updateTotal()">
            Electrical Failure ()
        </fieldset>
        <fieldset>
            <legend>Warranty Tier</legend>
            <select name="warrantyTier" id="warrantyTier" onchange="updateTotal()">
                <option value="tierIron">Iron Tier</option>
                <option value="tierGold">Gold Tier</option>
                <option value="tierDiamond">Diamond Tier</option>
            </select>
        </fieldset>
        <fieldset>
            <input type="submit" value="proceed to checkout" name="checkout">
        </fieldset>
</div>
<!--I wanted to make a table that shows the total within the webpage-->
<div id="prices">
    <table>
        <tr><td>Service Cost</td><td id="serviceCost"></td></tr>
        <tr><td>Discount Rate</td><td id="discountRate"></td></tr>
        <tr><td>Total Cost</td><td id="totalCost"></td></tr>
    </table>
</div>
</body>
</html>