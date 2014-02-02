// $('.typeahead-movies').typeahead({
// 	name: 'movies',
// 	remote: 'http://www.imdb.com/xml/find?json=1&nr=1&nm=on&q=%QUERY%',
// 	valueKey: 'title'
// });

function Movie(data) {
	var self = this;

	self.id = ko.observable();
    self.title = ko.observable();
    self.year = ko.observable();
    self.director = ko.observable();
    self.watched_at = ko.observable();
    self.rating = ko.observable();

    self.completeTitle = ko.computed(function() {
        return self.title() + " (" + self.year() + ")";
    });
}

function MovieListViewModel() {
	var self = this;

    self.newMovieName = ko.observable();
	self.movies = ko.observableArray([]);

    self.addMovie = function() {
        var movie = new Movie();
        alert(self.newMovieName());
        movie.title = self.newMovieName();
        movie.year = 12;
        self.movies.push(movie);
        self.newMovieName("");
    };

	$.getJSON("/mab/public/movies", function(allData) {
        var mappedMovies = $.map(allData, function(item) { return new Movie(item) });
        self.movies(mappedMovies);
    });
}

// Activates knockout.js
ko.applyBindings(new MovieListViewModel());