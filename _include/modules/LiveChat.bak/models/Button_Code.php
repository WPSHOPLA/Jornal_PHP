<?php

class Button_Code extends Model
{
	public function get()
	{
		$url = 'button_code';

		$code = parent::get($url);
		return $code->code;
	}
}