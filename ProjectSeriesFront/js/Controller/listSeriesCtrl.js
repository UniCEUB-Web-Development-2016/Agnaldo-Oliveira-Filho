angular.module("ProjectSeries").controller("listSeriesCtrl", function ($scope, $http) 
{
		var carregarListSeries = function() {
			$http.get("http://localhost/ProjectSeries/series/?").success(function (data) {
				$scope.listSeries = data;
			});
		};
		carregarListSeries();
});