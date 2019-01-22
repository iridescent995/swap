var app = angular.module('myapp', []);


app.controller('myctrl', ['$scope', 'myservice', function($scope, myservice){
	$scope.test = "this is test";
	$scope.users = myservice.getusers();
}]);

app.factory('myservice',[function(){

	function getusers(){
		return[
			{
				name:"user1",
				age:"10"
			},
			{
				name:"user2",
				age:"120"
			},
			{
				name:"user3",
				age:"130"
			}

		]
	}
	return{
		getusers
	};
}]);