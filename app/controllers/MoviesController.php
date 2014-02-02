<?php

class MoviesController extends BaseController {

	public function getMovies()
	{
        return Movie::all()->toJSON();
	}
}
