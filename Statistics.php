<html>
  <head>
    <link rel="stylesheet" href="css/bus_booking.css">
    <title>Statistics</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["8:30-10:00am", 60],
          ["10:05-11:35am", 31],
          ["11:40-1:10pm", 12],
          ["1:30-3:00pm", 10],
          ['3:00-4:30pm', 3]
        ]);

        var options = {
          width: 1000,
          height: 600,
          legend:  'none' ,
          chart: {
            title: 'Data Structure & Algorithm 1',},
          axes: {
            x: {
              0: { side: '', label: 'Time'} // Top x-axis.
            },
            y: {
                0: {side: 'top', label: 'Percentage'}
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
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
        <span>Home</span>
      </div>
      <div id="Student_Accounts">
        <span>Student Accounts</span>
      </div>
      <div id="Transport_Registration">
        <span>Transport Registration</span>
      </div>
      <div id="Vaccine_Status" onclick="application.goToTargetView(event)">
        <span>Vaccine Status</span>
      </div>
      <div id="Registration">
        <span>Registration</span>
      </div>
      <div id="Bus_Seat_Booking">
        <span>Bus Seat Booking</span>
      </div>


        <!-- Bar chart code starts here -->

        <section style="margin-top: 200px;">
          <div id="top_x_div" style="width: 800px; height: 600px; "></div>
        </section>
  </body>
</html>
