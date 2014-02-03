'use strict';

/* Controllers */

var mabControllers = angular.module('mabControllers', []);

mabControllers.controller('MovieListCtrl', ['$scope', '$http',
  function($scope, $http) {
    $http.get('movies/movies.json').success(function(data) {
      $scope.movies = data;
    });

    $scope.addMovie = function() {
			var movie = {};
			movie.title = $scope.nmTitle;
			movie.year = $scope.nmYear;
			movie.directors = $scope.nmDirectors;
			movie.watched_at = $scope.nmWatchedAt;

			$scope.movies.push(movie);

			$scope.clearFields();
		};


		$scope.clearFields = function() {
			document.getElementById("new-movie-form").reset();
			document.getElementById("new-movie-title").focus();
		};

		$scope.openCalendar = function($event) {
			$event.preventDefault();
			$event.stopPropagation();
			$scope.opened = true;
		};

		$scope.dateOptions = {
	    'year-format': "'yy'",
	    'starting-day': 1
	  };
  }
]);

// mabControllers.controller('MovieDetailCtrl', ['$scope', '$routeParams', '$http',
//   function($scope, $routeParams, $http) {
//     $http.get('movies/' + $routeParams.phoneId + '.json').success(function(data) {
//       $scope.phone = data;
//     });
//   }
// ]);