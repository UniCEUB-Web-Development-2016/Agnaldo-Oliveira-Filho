angular.module("ProjectSeries").controller("userCtrl", function ($scope, $http) 
{
		var carregarUsuario = function() {
			$http.get("http://localhost/ProjectSeries/usuario/?first_name=Agnaldo").success(function (data) {
				$scope.usuario = data;
			});
		};
		carregarUsuario();
});