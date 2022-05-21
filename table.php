<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/bus_booking.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
    <title>Preferred Time Selection</title>
  </head>
  <body>


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
          <span><a href="home.php" style="text-decoration: none; color:black;">Home</a></span>
      </div>
      <div id="Student_Accounts">
          <span><a href="news feed.php" style="text-decoration: none; color: black">News Feed</a></span>
      </div>
      <div id="Transport_Registration">
        <span><a href="table.php" style="text-decoration: none; color:black">Preferred Time</a></span>
      </div>
      <div id="Vaccine_Status" onclick="application.goToTargetView(event)">
        <span><a href="bus_booking.php" style="text-decoration: none; color:black;">Bus Seat Booking</a></span>
      </div>
      <div id="Registration">
          
      </div>
      <div id="Bus_Seat_Booking">
        
      </div>
    
    <!-- Table code starts here -->

    <section style="margin-top: 200px;">
      <div class="container">
        <fieldset>
          <legend>Auto Open Course</legend> <hr>
          <table class="table table-bordered table-sm border border-secondary" style="overflow: scroll;">
            <thead>
              <tr class=" text-white" style="background-color: #2196F3;">
                <th scope="col" class="text-center">SL</th>
                <th scope="col" class="text-center">Code</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Credits</th>
                <th scope="col" class="text-center">Group</th>
                <th scope="col" class="text-center">Offered <br> Trimester</th>
                <th scope="col" class="text-center">Mandatory</th>
                <th scope="col" class="text-center">Action</th>
                <th scope="col" class="text-center">Section</th>
                <th scope="col" class="text-center">Preferred Time</th>
              </tr>
            </thead>
            <tbody>
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">1</th>
                    <td >
                      MATH 2183
                    </td>
                    <td >Calculus and Linear Algebra</td>
                    <td align="center">3.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">4th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                      <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-10:00" selected>8:30-10:00am</option>
                          <option value="10:05-11:35">10:05-11:35am</option>
                          <option value="11:40-1:10">11:40-1:10pm</option>
                          <option value="1:30-3:00">1:30-3:00pm</option>
                          <option value="3:00-4:30">3:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
                
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">2</th>
                    <td >
                      CSE 2118
                    </td>
                    <td >	Advanced Object Oriented Programming Laboratory</td>
                    <td align="center">1.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">4th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <option value="8:30-11:00" selected>8:30-11:00am</option>
                          <option value="11:00-1:30">11:00-1:30pm</option>
                          <option value="2:00-4:30">2:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">3</th>
                    <td >
                      MATH 2201
                    </td>
                    <td >Coordinate Geometry and Vector Analysis</td>
                    <td align="center">3.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">5th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-10:00" selected>8:30-10:00am</option>
                          <option value="10:05-11:35">10:05-11:35am</option>
                          <option value="11:40-1:10">11:40-1:10pm</option>
                          <option value="1:30-3:00">1:30-3:00pm</option>
                          <option value="3:00-4:30">3:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">4</th>
                    <td >
                      CSE 2215
                    </td>
                    <td >	Data Structure and Algorithms I</td>
                    <td align="center">3.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">5th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-10:00" selected>8:30-10:00am</option>
                          <option value="10:05-11:35">10:05-11:35am</option>
                          <option value="11:40-1:10">11:40-1:10pm</option>
                          <option value="1:30-3:00">1:30-3:00pm</option>
                          <option value="3:00-4:30">3:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">5</th>
                    <td >
                      CSE 2216
                    </td>
                    <td >	Data Structure and Algorithms I Laboratory</td>
                    <td align="center">1.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">5th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-11:00" selected>8:30-11:00am</option>
                          <option value="11:00-1:30">11:00-1:30pm</option>
                          <option value="2:00-4:30">2:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">6</th>
                    <td >
                      MATH 2205
                    </td>
                    <td >	Probability and Statistics</td>
                    <td align="center">3.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">6th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-10:00" selected>8:30-10:00am</option>
                          <option value="10:05-11:35">10:05-11:35am</option>
                          <option value="11:40-1:10">11:40-1:10pm</option>
                          <option value="1:30-3:00">1:30-3:00pm</option>
                          <option value="3:00-4:30">3:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
                  <tr style="background-color: whitesmoke;">
                    <th class="text-center" scope="row">7</th>
                    <td >
                      EEE 2123
                    </td>
                    <td >	Electronics</td>
                    <td align="center">3.00</td>
                    <td>--</td>
                    <td style="text-align: center;  ">6th</td>
                    <td align="center">
                      <span disabled="disabled"> <input type="checkbox" disabled="disabled"> </span>
                    </td>
                    <td align="center"> <a style="text-decoration: none;" href="">Click To Take</a> </td>
                    <td ></td>
                    <td>
                    <select class="dropdown"> 
                        <label
                          class="btn dropdown-toggle border-end text-center"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        ></label>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <option value="8:30-10:00" selected>8:30-10:00am</option>
                          <option value="10:05-11:35">10:05-11:35am</option>
                          <option value="11:40-1:10">11:40-1:10pm</option>
                          <option value="1:30-3:00">1:30-3:00pm</option>
                          <option value="3:00-4:30">3:00-4:30pm</option>
                        </ul>
                      </select>
                    </td>
                  </tr>
    
            </tbody>
          </table>
        </fieldset>
      </div>
    </section>
  </body>
</html>
