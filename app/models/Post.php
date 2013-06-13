<?php

class Post extends Ardent {
    protected $guarded = array();

    public static $rules = array(
		'url' => 'required',
		'karma' => 'required'
	);
}
