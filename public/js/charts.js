google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Development of Spl/t Platform',     10.8],
          ['Fund',      4.8],
          ['Marketing',  4.8],
          ['Legal', 2.4],
          ['Weekly Early Draw Seed',    1.2]
        ]);

		var data2 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Accelerator Development/Marketing/Legal',    9.6],
          ['Fund',     14.4],
          
        ]);

        var options = {
          title: 'ICO Funds Distribution',
		  is3D: true,
        };

		var options2 = {
          title: 'Spl/t Token Distribution',
		  is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
		chart2.draw(data2, options2);
      }