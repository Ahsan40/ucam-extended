<?php
    require_once './header.php';
    $user_data = check_login($conn);
    
    if(isset($_POST['book_seat']))
    {
        //echo "Send Massage";
        book_ticket($conn, $_POST);
        header("Location: " . PAGES['shuttle']);
    }
	?>


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

<!-- <div style="margin-top: 200px;" class="bus" id="bus" >
</div>
<div class="bus_btn">
	  <button onclick="showSeats()">showSelectedSheet</button>
</div> -->

<section style="margin-top: 200px;">
  <div class="plane">
    <h1>Bus Seat design</h1>
  <div class="fuselage">
    
  </div>
  <form method="post" action="./bus_booking.php">
    <input name="u_id" type="hidden" value="<?php echo $user_data['u_id'] ; ?>" />
    <input name="b_id" type="hidden" value="1" />
    <input name="round" type="hidden" value="1" />
    <?php
    $query ="SELECT * FROM s_shift";
   $result =  $conn->query($query);


?>
      <select  name="s_time" >
      <?php while ($line = mysqli_fetch_assoc($result)){ ?> 

      <option name="s_id" value="<?php echo $line['s_id'];?>"> <?php echo $line['time'];?>

  </option>   <?php } ?> </select>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="1A" />
          <button><label for="1A">1A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="1B" />
          <button><label for="1B">1B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="1C" />
          <button><label for="1C">1C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox"  id="1D" />
          <button><label for="1D">1D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="1E" />
          <button><label for="1E">1E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="1F" />
          <button><label for="1F">1F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="2A" />
          <button><label for="2A">2A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="2B" />
          <button><label for="2B">2B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="2C" />
          <button><label for="2C">2C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="2D" />
          <button><label for="2D">2D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="2E" />
          <button><label for="2E">2E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="2F" />
          <button><label for="2F">2F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="3A" />
          <button><label for="3A">3A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="3B" />
          <button><label for="3B">3B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="3C" />
          <button><label for="3C">3C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="3D" />
          <button><label for="3D">3D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="3E" />
          <button><label for="3E">3E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="3F" />
          <button><label for="3F">3F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="4A" />
          <button><label for="4A">4A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="4B" />
          <button><label for="4B">4B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="4C" />
          <button><label for="4C">4C</label></button>>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="4D" />
          <button><label for="4D">4D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="4E" />
          <button><label for="4E">4E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="4F" />
          <button><label for="4F">4F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="5A" />
          <button><label for="5A">5A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="5B" />
          <button><label for="5B">5B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="5C" />
          <button><label for="5C">5C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="5D" />
          <button><label for="5D">5D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="5E" />
          <button><label for="5E">5E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="5F" />
          <button><label for="5F">5F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="6A" />
          <button><label for="6A">6A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="6B" />
          <button><label for="6B">6B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="6C" />
          <button><label for="6C">6C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="6D" />
          <button><label for="6D">6D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="6E" />
          <button><label for="6E">6E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="6F" />
          <button><label for="6F">6F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="7A" />
          <button><label for="7A">7A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="7B" />
          <button><label for="7B">7B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="7C" />
          <button><label for="7C">7C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="7D" />
          <button><label for="7D">7D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="7E" />
          <button><label for="7E">7E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="7F" />
          <button><label for="7F">7F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="8A" />
          <button><label for="8A">8A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="8B" />
          <button><label for="8B">8B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="8C" />
          <button><label for="8C">8C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="8D" />
          <button><label for="8D">8D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="8E" />
          <button><label for="8E">8E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="8F" />
          <button><label for="8F">8F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="9A" />
          <button><label for="9A">9A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="9B" />
          <button type="submit"><label for="9B">9B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="9C" />
          <button><label for="9C">9C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="9D" />
          <button><label for="9D">9D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="9E" />
          <button><label for="9E">9E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="9F" />
          <button><label for="9F">9F</label></button>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat" value="10A" />
          <button><label for="10A">10A</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="10B" />
          <button><label for="10B">10B</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="10C" />
          <button><label for="10C">10C</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="10D" />
          <button><label for="10D">10D</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="10E" />
          <button><label for="10E">10E</label></button>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat" value="10F" />
          <button><label for="10F">10F</label></button>
        </li>
      </ol>
    </li>
  </ol>
  <div class="fuselage">
    <input type="submit" name="book_seat" value="Book"/>
  </form>
    
  </div>
</div>
</section>

</body>
</html>