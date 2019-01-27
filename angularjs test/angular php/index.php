<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
  <title>Angular PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script> 
  <script type="text/javascript" src="script.js"></script>
</head>
<body ng-controller="myctrl">

<div class="jumbotron text-center" ng-controller="myctrl">
  <h1>Angular with PHP | MY SQL</h1>
  <p></p> 
</div>
  
<div class="container">
  <div class="row" ng-init="display_data">
   <table class="table table-bordered" >
   	<thead class="thead-dark">
   		<tr align="center">
   			<th>Id</th>
   			<th>Titles</th>
   			<th>Description</th>
   			<th>Location</th>
   		</tr>
   	</thead>
   	<tbody>
   		<tr ng-repeat="photo in photos">
   			<td >{{photo.id}}</td>
   			<td >{{photo.title}}</td>
   			<td >{{photo.decription}}</td>
   			<td >{{photo.location}}</td>
   		</tr>

   	</tbody>	
   </table>
  </div>
</div>

</body>
</html>
