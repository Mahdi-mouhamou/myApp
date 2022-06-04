@extends('voyager::master')
@section('content')

<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #ff4400;
      color: white;
    }
    </style>

        <h4 class="text-center card-header "> All Product </h4>
     
              <table class="table" id="customers">
                  <thead>
                      <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Titre</th>
                          <th scope="col" > type article</th>
                          <th scope="col">prix</th>
                          <th scope="col">description</th>
                          <th scope="col">Action View </th>
                          <th scope="col">Action Delete </th>
                          <th scope="col">Action Edit </th>
                      </tr>
                  </thead>
              <tbody>
                @foreach ($produit as $prod)
        
                <tr>
                 <td scope="row">{{ $prod->id }}</th>
                 <td>{{ $prod->titre }}</td>  
                 <td>{{ $prod->typeArticle }}</td>
                 <td>{{ $prod->prix }}</td>
                 <td>{{ $prod->description }}</td>
                 <td> <a href=" {{ route('get.productByID',['id'=>$prod->id]) }} " class="btn btn-dark" style="color: aliceblue; text-decoration: none" >view</a> </td>
                 <td> <a href=" {{ route('delete',['id'=>$prod->id]) }}" class="btn btn-dark" style="color: aliceblue; text-decoration: none" >delete</a> </td>
                 <td> <a href="{{ route('edit',['id'=>$prod->id]) }}" class="btn btn-dark" style="color: aliceblue; text-decoration: none" >edit</a> </td>
                 </tr>
                 @endforeach

                 
              </tbody>
         
        </table>

        <h4 class="text-center card-header "> All Post </h4>
     
              <table class="table" id="customers">
                  <thead>
                      <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Title</th>
                         
                      </tr>
                  </thead>
              <tbody>
                @foreach ($posts as $posts)
        
                <tr>
                 <td scope="row">{{ $posts->id }}</th>
                 <td>{{ $posts->title }}</td>  
                 {{-- <td>{{ $posts->typeArticle }}</td>
                 <td>{{ $posts->prix }}</td>
                 <td>{{ $posts->description }}</td>
                 <td> <a href=" {{ route('get.productByID',['id'=>$prod->id]) }} " class="btn btn-dark" style="color: aliceblue; text-decoration: none" >view</a> </td>
                 <td> <a href=" {{ route('delete',['id'=>$prod->id]) }}" class="btn btn-dark" style="color: aliceblue; text-decoration: none" >delete</a> </td>
                 <td> <a href="{{ route('edit',['id'=>$prod->id]) }}" class="btn btn-dark" style="color: aliceblue; text-decoration: none" >edit</a> </td>
                  --}}</tr>
                 @endforeach

                 
              </tbody>
         
        </table>
    

     
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);
            
              function drawChart() {
            
                var data = google.visualization.arrayToDataTable([
                  ['Catégories', 'Produits'],
                  @foreach ($produit as $category) 
                  
                  // On parcourt les catégories
                  [ "{{ $category->titre }}", {{ $category->count() }} ], // Proportion des produits de la catégorie
                  @endforeach
                  @foreach ($categories as $category) 
                  [ "{{ $category->name }}", {{ $category->count() }} ], 
                
                  @endforeach
                ]);
            
                var options = {
                  title: 'Proportion des catégorie', // Le titre
                  is3D : true // En 3D
                };
            
                // On crée le chart en indiquant l'élément où le placer "#mon-chart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            
                // On désine le chart avec les données et les options
                chart.draw(data, options);
              }
            </script>
     
            
            <div id="piechart" style="width: 900px; height: 500px;"></div>
          
        




@endsection