<?php
include("insert.php")
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/reservation.css">
    <title>Room Booking</title>
</head>
<body>
    <div class="container">
        <div class="container-time">
        <h2 class="heading-days" style="font-family: 'Courgette',cursive;">Some Regulations</h2>
        <hr>

        <h4 class="heading-days">Check In Time: 10am</h4>
        <h4 class="heading-days">Check Out Time: 12pm</h4>
        <p>Breakfast: 8am - 11am</p>
        <p>Lunch: 12pm - 3pm</p>
        <p>Dinner: 8pm - 12am</p>
        <p>Deluxe Room: 3 people</p>
        <p>Luxury Room: 4 people</p>
        <p>Single Room: 2 people</p>
        <p>Guest House: 7 people</p>

        <h4 class="heading-phone">Customer Pick Up: Just give a call on 020 2775 0220</h4>
        </div>
    </div>
<div class="container-form">

    <form action="" method="post">
        <fieldset>
        <h2 class="heading heading-yellow" style="text-align: center; font-family: 'Courgette',cursive; font-size: 35px;">Online Reservation</h2>   
        <label>Full Name</label><input type="text" id="name" name="name" required>
        <label>Address</label><input type="text" id="address" name="address" required>
        <br>
        <br>
        <br>
        <label>Check In</label><input type="date" id="cin"  name="cin" min="2020-11-04" required>
        <label>Check Out</label><input type="date" id="cout" name="cout" min="2020-11-05" required>
        <br>
        <br>
        <br>
        <label>Mobile No</label><input type="text" id="phone" name="phone" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required>
        <label>No of Guests</label><input type="Number" id="guests" name="guests" min="1" required>
        <br>
        <br>
        <br>
        <label>Single Room</label><input type="Number" id="sin" name="sin" min="0" required>
        <label>Deluxe Room</label><input type="Number" id="del" name="del" min="0" required>
        <br>
        <br>
        <br>
        <label>Luxury Room</label><input type="Number" id="lux" name="lux" min="0" required>
        <label>Guest House</label><input type="Number" id="gue" name="gue" min="0" required>
        <br>
        <br>
        <input style="margin-left: 45%;" type="submit" name="submit" id="submit">
        </fieldset>

    </form>
</body>
</html>
