
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warranty and Maintenance System</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js">

    </script>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">


</head>
<body>
<header>
    <h1>Warranty and Maintenance System</h1>
</header>
<section class="userContainer">
    <div class="newUser" id="new_user">
        <h4>New Customer</h4>
        <form action="database.php" method="POST">
            <label for="fname">First Name:</label>
            <br>
            <input type="text" id="fname" name="fname" required >
            <br>
            <label for="lname">Last Name:</label>
            <br>
            <input type="text" id="lname" name="lname" required>
            <br>
            <label for="address">Address:</label>
            <br>
            <input type="text" id="address" name="address" required>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone">Phone number:</label>
            <br>
            <input type="tel" id="phone" name="phone" required>
            <br>
            <input type=submit name="submit" value="submit">
        </form>
    </div>
</section>
<br>
<fieldset>
            <legend>Warranty Tier</legend>
            <select name="warrantyTier" id="warrantyTier" onchange="updateTotal()">
                <option value="tierIron">Iron Tier</option>
                <option value="tierGold">Gold Tier</option>
                <option value="tierDiamond">Diamond Tier</option>
                <option value="none">No Plan</option>
            </select>
        </fieldset>
<button><a href="maintenance.php">Repairs</a></button>
<h1>Warranty Information: </h1>
<div class="tiers">
    <div id="iron">
        <h4>Iron Plan</h4>
        <button onclick="ironTier()" id="iron_plan">Details</button>
        <div id="ironHiddenText">
            <header>Powertrain Coverage</header>
            <p>100 days or 5,000 miles</p>
            <header>Non-Powertrain Coverage</header>
            <p>100 days or 5,000 miles</p>
            <p>Roadside assistance: <span>yes</span></p>
            <p>First battery replacement is 15% off</p>
        </div>
    </div>
    <div id="gold">
        <h4>Gold Plan</h4>
        <button onclick="goldTier()" id="gold_plan">Details</button>
        <div id="goldHiddenText">
            <header>Powertrain Coverage</header>
            <p>7 years or 100,000 miles</p>
            <header>Non-Powertrain Coverage</header>
            <p>For vehicles purchased withink <span>New Vehicle</span>
                Limited Warranty period: extends New Vehicle Limited Warranty
            to 4 years or 48,000 miles</p>
            <p>For Vehicles purchased after <span>New Vehicle</span> Limited Warranty
            has expired: 1 year or 12,000 from delivery date</p>
            <p>Roadside assistance: <span>yes</span></p>
            <p>First battery replacement is 30% off</p>
        </div>
    </div>
    <div id="diamond">
        <h4>Diamond Plan</h4>
        <button onclick="diamondTier()" id="diamond_plan">Details</button>
        <div id="diamondHiddenText">
            <header>Powertrain Coverage</header>
            <p>7 years or 100,000 miles</p>
            <header>Non-Powertrain Coverage</header>
            <p>For vehicles purchased withink <span>New Vehicle</span>
                Limited Warranty period: 5 years or 86,000 miles</p>
            <p>Roadside assistance: <span>yes</span></p>
            <p>First battery replacement is free</p>
        </div>
    </div>
<footer>
    copyright &copy 2023
</footer>
</body>
</html>

<!-- Warranty and Maintenance System is the title page. You are required to fill out either of the forms.
The new customer form brings you to the warranty selection, where you can view the different plans.
The returning customer form brings you to the maintenance page. This is where you can check all the services you want, and the total will update.
Making the site look pretty will be next task.
-->