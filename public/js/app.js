'use strict';

/* App Module */

var mabApp = angular.module('mabApp', [
  'ngRoute',
  'mabControllers'
]);

mabApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/movies', {
        templateUrl: 'partials/movie-list.html',
        controller: 'MovieListCtrl'
      }).
      when('/books', {
        templateUrl: 'partials/book-list.html',
        controller: 'MovieListCtrl'
      }).
      otherwise({
        redirectTo: '/movies'
      });
  }
]);