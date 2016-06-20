angular.module("ProjectSeries").controller("seriesCtrl", function ($scope, $http, $routeParams, serie, serieEp, seriesAPI) 
{
		$scope.serie = serie.data;
		$scope.serieEp = serieEp.data;

		var carregarEpisodios = function() {
			seriesAPI.getEpisodios().success(function (data) {
				$scope.episodios = data;
			});
		};
		carregarEpisodios();
});