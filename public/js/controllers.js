'use strict';

/* Controllers */

var mabControllers = angular.module('mabControllers', []);

mabControllers.controller('MovieListCtrl', ['$scope', '$http',
  function($scope, $http) {
    $http.get('movies/movies.json').success(function(data) {
      $scope.movies = data;
    });
  }
]);

// mabControllers.controller('MovieDetailCtrl', ['$scope', '$routeParams', '$http',
//   function($scope, $routeParams, $http) {
//     $http.get('movies/' + $routeParams.phoneId + '.json').success(function(data) {
//       $scope.phone = data;
//     });
//   }
// ]);