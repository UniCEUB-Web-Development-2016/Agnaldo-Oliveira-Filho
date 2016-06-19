angular.module("ProjectSeries").factory("seriesAPI", function($http, config){
	var _getSeries = function () {
		return $http.get("http://localhost/ProjectSeries/series/?");
    };
    return{
    	getSeries: _getSeries
    };
});