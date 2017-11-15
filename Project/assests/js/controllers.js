
var MySite = angular.module('MySite', []);


MySite.controller('MainCtrl', function MainCtrl($scope, $http){
	

	$http.get("https://api.myjson.com/bins/l9pn3").then(function(response){
		
		$scope.tests = response.data;
	});

  $scope.quantity = 10;
	

 

  
});



