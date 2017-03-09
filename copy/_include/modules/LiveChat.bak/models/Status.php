<?php

class Status extends Model
{
	public function get()
	{
		$url = 'status';

		$status = parent::get($url);
		return $status->status;
	}
}