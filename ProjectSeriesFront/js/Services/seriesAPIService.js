angular.module("ProjectSeries").factory("seriesAPI", function($http){

    var _getSerieEp = function (idt_serie) {
        return $http.get("http://localhost/ProjectSeries/series/?idt_serie=" + idt_serie);
    };
    var _getEpisodios = function (idt_serie) {
		return $http.get("http://localhost/ProjectSeries/episodio/?idt_serie=" + idt_serie);
    };
    return{
        getSerieEp: _getSerieEp,
    	getEpisodios: _getEpisodios
    };
});