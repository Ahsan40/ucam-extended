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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
    <title>Preferred Time Selection</title>
  </head>
  <body>

    
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-10:00</a></li>
                        <li><a class="dropdown-item" href="#">10:05-11:35</a></li>
                        <li><a class="dropdown-item" href="#">11:40-1:10</a></li>
                        <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li>
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-11:00</a></li>
                        <li><a class="dropdown-item" href="#">11:00-1:30</a></li>
                        <li><a class="dropdown-item" href="#">1:30-4:00</a></li>
                        <!-- <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li> -->
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-10:00</a></li>
                        <li><a class="dropdown-item" href="#">10:05-11:35</a></li>
                        <li><a class="dropdown-item" href="#">11:40-1:10</a></li>
                        <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li>
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-10:00</a></li>
                        <li><a class="dropdown-item" href="#">10:05-11:35</a></li>
                        <li><a class="dropdown-item" href="#">11:40-1:10</a></li>
                        <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li>
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-11:00</a></li>
                        <li><a class="dropdown-item" href="#">11:00-1:30</a></li>
                        <li><a class="dropdown-item" href="#">1:30-4:00</a></li>
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-10:00</a></li>
                        <li><a class="dropdown-item" href="#">10:05-11:35</a></li>
                        <li><a class="dropdown-item" href="#">11:40-1:10</a></li>
                        <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li>
                      </ul>
                    </div>
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
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle border-end text-center"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Choose your time
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">8:30-10:00</a></li>
                        <li><a class="dropdown-item" href="#">10:05-11:35</a></li>
                        <li><a class="dropdown-item" href="#">11:40-1:10</a></li>
                        <li><a class="dropdown-item" href="#">1:30-3:00</a></li>
                        <li><a class="dropdown-item" href="#">3:00-4:30</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
  
          </tbody>
        </table>
      </fieldset>
    </div>
  </body>
</html>
