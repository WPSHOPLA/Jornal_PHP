<?php

class Visitors extends Model
{
	public function get()
	{
		$url = 'visitors';

		return parent::get($url);
	}
}