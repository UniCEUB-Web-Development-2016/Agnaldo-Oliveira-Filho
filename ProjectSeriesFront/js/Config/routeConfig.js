angular.module("ProjectSeries").config(function($routeProvider){
	$routeProvider.when("/principal",{
		templateUrl: "view/principal.html",
		controller: "principalCtrl"

	});
	$routeProvider.when("/listSeries",{
		templateUrl: "view/listSeries.html",
		controller: "listSeriesCtrl"

	});
	$routeProvider.when("/statusSeries",{
		templateUrl: "view/statusSeries.html",
		controller: "statusSeriesCtrl"

	});
	$routeProvider.when("/series",{
		templateUrl: "view/series.html",
		controller: "seriesCtrl"

	});
	$routeProvider.when("/userPage",{
		templateUrl: "view/userPage.html",
		controller: "userCtrl"

	});
	$routeProvider.otherwise({redirectTo:"/principal"})
});