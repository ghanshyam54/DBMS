
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Rates</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
{
  box-sizing: border-box;
}
body {
  background-color: lightyellow;
}

.column {
  float: left;
  width: 22%;
  padding: 10px;
}
.column img {
  margin-top: 35px;
  margin-left: 40px;
}

.row:after {
  content:"";
  display:table;
  clear:both;
}
span.a {
  display:inline-block;
  height: 200px;
  background-color: lightgrey;
  width: 90%;
  border: 5px solid black;
  margin: 55px;
}
</style>
</head>

<body>
<h1 style="text-align: center; font-size: 55px; font-family: 'Courgette',cursive;">Your Dream Rooms</h1>
<hr color="black" width="90%" size="5">
<div class="row">
  <div class="column">
  <img src="images/r1.jpg" style="width:100%">
  <span class="a">
    <h3 style="text-align: center; font-family: 'Cinzel', serif;">Deluxe Room</h3>
    <ul>
      <li>Triple Bed + Single Bed</li>
      <li>Air Conditioning</li>
      <li>Gallery</li>
      <li>3 people</li>
    </ul>
    <h3 align="center">Rs. 4000</h3>
  </span>
  </div>
  <div class="column">
  <img src="images/r2.jpg" style="width:100%">
  <span class="a">
    <h3 style="text-align: center; font-family: 'Cinzel', serif;">Luxury Room</h3>
    <ul>
      <li>1 Room + Hall</li>
      <li>Air Conditioning</li>
      <li>Gallery + Garden View</li>
      <li>4 people</li>
    </ul>
    <h3 align="center">Rs. 6000</h3>
  </span>
  </div>
  <div class="column">
  <img src="images/r3.jpg" style="width:100%">
  <span class="a">
    <h3 style="text-align: center; font-family: 'Cinzel', serif;">Guest House</h3>
    <ul>
      <li>2 rooms + Hall + Kitchen</li>
      <li>Air Conditioning</li>
      <li>Gallery</li>
      <li>7people</li>
    </ul>
    <h3 align="center">Rs. 9000</h3>
  </span>
  </div>
  <div class="column">
  <img src="images/r4.jpg" style="width:100%">
  <span class="a">
    <h3 style="text-align: center; font-family: 'Cinzel', serif;;">Single Room</h3>
    <ul>
      <li>Double Bed</li>
      <li>Sofa</li>
      <li>Gallery</li>
      <li>2 people</li>
    </ul>
    <h3 align="center">Rs. 2000</h3>
  </span>
  </div>
</div>

<div style="text-align: center">
  <a href="reservation.php" class="btn uppercase btn-primary">Book A Room Now</a>
</div>

</body>
</html>