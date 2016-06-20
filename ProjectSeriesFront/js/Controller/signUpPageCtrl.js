angular.module("ProjectSeries").controller("signUpPageCtrl", function ($scope, $http) 
{
		$scope.cadastrarUsuario = function(usuario){
			usuario.data = new Date();
			$http.post("http://localhost/ProjectSeries/usuario/?", usuario).success(function(data){
			delete $scope.usuario;
			$scope.usuarioForm.$setPristine();

			});
		};
});