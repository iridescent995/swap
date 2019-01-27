var app = angular.module('myapp', []);

app.controller('myctrl',['$scope', '$http', function($scope, $http){
	
	// $scope.display_data = function(){
	// 	$http.get(dbconnect.php).success(function(data){
	// 		$scope.photos = data;
	// 		console.log(data);
	// 	});

	// }

	$http({
	  method: 'get',
	  url: 'dbconnect.php'
	 }).then(function successCallback(response) {
	  // Store response data
  $scope.photos = response.data;
 });

}]);