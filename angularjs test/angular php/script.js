var app = angular.module('myapp', []);

app.controller('myctrl', function($scope, $http){
	
	$scope.display_data = function(){
		$http.get(dbconnect.php).success(function(data){
			$scope.photos = data;
			console.log(data);
		});

	}

});