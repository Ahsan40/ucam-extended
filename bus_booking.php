<!DOCTYPE html>
<html>
<head>
	<title>Red Bus Sheet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="css/bus_booking.css">
</head>
<body onload="GenerateSeats()">

	<div id="Web_1920__2">
		<img id="UIU_Logo" src="UIU_Logo.png" srcset="img/UIU_Logo.png 1x, UIU_Logo@2x.png 2x">
			
		<svg class="Rectangle_1">
			<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1931" height="50">
			</rect>
		</svg>
		<svg class="Rectangle_2">
			<rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_4">
			<rect id="Rectangle_4" rx="0" ry="0" x="0" y="0" width="1941" height="4">
			</rect>
		</svg>
		<div id="Current_221_-_Spring_2022_Seme">
			<span>Current→</span><span style="color:rgba(112,112,112,1);"> </span><span style="color:rgba(207,108,108,1);">221 - Spring 2022 (Semester), 221 - Spring 2022 (Trimester)</span>
		</div>
		<div id="Registration_221_-_Spring_2022">
			<span>Registration→ </span><span style="color:rgba(207,108,108,1);">221 - Spring 2022 (Semester), 222 - Summer 2022 (Trimester)</span>
		</div>
		<svg class="Rectangle_5">
			<rect id="Rectangle_5" rx="2" ry="2" x="0" y="0" width="65.843" height="24.523">
			</rect>
		</svg>
		<div id="Logout">
			<span><button style="background-color: #F2531C; color: white">Logout</button></span>
		</div>
		<div id="Text">
			<span>/</span>
		</div>
		<div id="n_1118234">
			<span>01118234</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Home">
			<span><a href="home.php" style="text-decoration: none; color: black">Home</a></span>
		</div>
		<div id="Student_Accounts">
			<span><a href="news feed.php" style="text-decoration: none; color: black">News Feed</a></span>
		</div>
		<div id="Transport_Registration">
			<span><a href="table.php" style="text-decoration: none; color: black">Preferred Time</a></span>
		</div>
		<div id="Vaccine_Status" onclick="application.goToTargetView(event)">
			<span><a href="bus_booking.php" style="text-decoration: none; color:black;">Bus Seat Booking</a></span>
		</div>
		<div id="Registration">
			
		</div>
		<div id="Bus_Seat_Booking">
			
		</div>

<div style="margin-top: 200px;" class="bus" id="bus" >
</div>
<div class="bus_btn">
	  <button onclick="showSeats()">showSelectedSheet</button>
</div>
</body>
</html>