<?php

class Movie extends Eloquent {

	protected $fillable = array('title', 'year', 'director', 'watched_at', 'rating');
	public $timestamps = false;
}
