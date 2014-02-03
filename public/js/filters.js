'use strict';

/* Filters */

angular.module('mabFilters', []).filter('stars', function() {
  return function(input) {
  	var stars = '';

    for (var i = 1; i <= 5; i++) {
    	stars += input >= i ?  '\u2605' :  '\u2606';
    };

    return stars;
  };
});
