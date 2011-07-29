<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Kohana_OAuth2_Provider_VKontakte extends OAuth2_Provider {

	public $name = 'vkontakte';

	public function url_authorize()
	{
		return 'http://api.vkontakte.ru/oauth/authorize';
	}

	public function url_access_token()
	{
		return 'https://api.vkontakte.ru/oauth/access_token';
	}


}