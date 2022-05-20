<html>
  <head>
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
              0: { side: '', label: ''} // Top x-axis.
            },
            // y: {
            //     0: {side: 'top', label: 'White to move'}
            // }
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
        <div id="top_x_div" style="width: 800px; height: 600px; "></div>
  </body>
</html>
