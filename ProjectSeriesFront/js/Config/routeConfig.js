angular.module("ProjectSeries").config(function($routeProvider){
	$routeProvider.when("/principal",{
		templateUrl: "view/principal.html",
		controller: "principalCtrl"
	});
	$routeProvider.when("/listSeries",{
		templateUrl: "view/listSeries.html",
		controller: "listSeriesCtrl",
		resolve: {
			series: function(listSeriesAPI){
				return listSeriesAPI.getSeries();
			}
		}

	});
	$routeProvider.when("/statusSeries/:idt_serie",{
		templateUrl: "view/statusSeries.html",
		controller: "statusSeriesCtrl",
		resolve:{
			epSerie: function(seriesAPI, $route){
				return seriesAPI.getEpisodios($route.current.params.idt_serie);
			}
		}

	});
	$routeProvider.when("/series/:idt_serie",{
		templateUrl: "view/series.html",
		controller: "seriesCtrl",
		resolve: {
			serie: function(listSeriesAPI, $route){
				return listSeriesAPI.getSerie($route.current.params.idt_serie);
			},
			serieEp: function(seriesAPI, $route){
				return seriesAPI.getEpisodios($route.current.params.idt_serie);
			}/*,
			ator: function(atorAPI){
				return atorAPI.getAtores();
			},
			escritor: function(escritorAPI){
				return escritorAPI.getEscritor();
			},
			temporada: function(temporadaAPI){
				return temporadaAPI.getTemporada();
			},
			episodio: function(episodioAPI){
				return episodioAPI.getEpisodio();
			}*/
		}

	});
	$routeProvider.when("/userPage",{
		templateUrl: "view/userPage.html",
		controller: "userCtrl"

	});
	$routeProvider.when("/signUpPage",{
		templateUrl: "view/signUpPage.html",
		controller: "signUpPageCtrl"

	});
	$routeProvider.otherwise({redirectTo:"/principal"})
});