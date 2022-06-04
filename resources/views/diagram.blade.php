<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
    
      function drawChart() {
    
        var data = google.visualization.arrayToDataTable([
          ['Catégories', 'Produits'],
          @foreach ($categories as $category) 
          
          // On parcourt les catégories
          [ "{{ $category->name }}", {{ $category->count() }} ], // Proportion des produits de la catégorie
          
          @endforeach
          ['compteur',{{$cpt}}],
          
        ]);
    
        var options = {
          title: 'Proportion des catégorie', // Le titre
          is3D : true // En 3D
        };
    
        // On crée le chart en indiquant l'élément où le placer "#mon-chart"
        var chart = new google.visualization.PieChart(document.getElementById('curve_chart'));
    
        // On désine le chart avec les données et les options
        chart.draw(data, options);
      }



      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        
          ['Catégories', 'Produits'],
          @foreach ($categories as $category) 
          
          // On parcourt les catégories
          [ "{{ $category->name }}", {{ $category->count() }} ], // Proportion des produits de la catégorie
          
          @endforeach
          ['compteur',{{$cpt}}],
          

        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
