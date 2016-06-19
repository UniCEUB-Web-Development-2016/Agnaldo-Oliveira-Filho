angular.module("ProjectSeries").controller("seriesCtrl", function ($scope, $http) 
{
	var carregarTemporadas = function() {
			$http.get("http://localhost/ProjectSeries/temporada/?cod_serie=1").success(function (data) {
				$scope.temps = data;
			});
		};
		carregarTemporadas();
		var carregarSerie = function() {
			$http.get("http://localhost/ProjectSeries/series/?name_series=Game%20of%20thrones").success(function (data) {
				$scope.series = data;
			});
		};
		carregarSerie();
		var carregarAtores = function() {
			$http.get("http://localhost/ProjectSeries/ator_temporada/?name_series=Game%20of%20thrones").success(function (data) {
				$scope.atores = data;
			});
		};
		carregarAtores();
		var carregarEscritor = function() {
			$http.get("http://localhost/ProjectSeries/escritor/?cod_serie=1").success(function (data) {
				$scope.escritor = data;
			});
		};
		carregarEscritor();
		var carregarCategoria = function() {
			$http.get("http://localhost/ProjectSeries/series_categoria/?nme_categoria=Medieval").success(function (data) {
				$scope.categoria = data;
			});
		};
		carregarCategoria();
		var carregarStatus = function() {
			$http.get("http://localhost/ProjectSeries/status_episodio_usuario/?").success(function (data) {
				$scope.status = data;
			});
		};
		carregarStatus();
});