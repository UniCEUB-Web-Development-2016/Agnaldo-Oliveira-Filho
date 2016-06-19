angular.module("ProjectSeries").controller("statusSeriesCtrl", function ($scope, $http) 
{
		var carregarEpisodios = function() {
			$http.get("http://localhost/ProjectSeries/episodio/?cod_serie=1").success(function (data) {
				$scope.episodios = data;
			});
		};
		carregarEpisodios();
});