<?php

class Tracking_Code extends Model
{
	public function get()
	{
		$url = 'tracking_code';

		$code = parent::get($url);
		return $code->code;
	}
}