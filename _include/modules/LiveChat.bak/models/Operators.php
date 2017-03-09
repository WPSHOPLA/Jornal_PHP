<?php

class Operators extends Model
{
	public function get($id=null)
	{
		$url = 'operators';
		$id = (int)$id;
		if ($id > 0)
		{
			$url .= '/'.$id;
		}

		return parent::get($url);
	}

	public function add($vars)
	{
		$url = 'operators';

		return parent::post($url, $vars);
	}

	public function update($id, $vars)
	{
		$id = (int)$id;
		$url = 'operators/'.$id;

		return parent::put($url, $vars);
	}

	public function delete($id)
	{
		$id = (int)$id;
		$url = 'operators/'.$id;

		return parent::delete($url);
	}
}