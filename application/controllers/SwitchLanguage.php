<?php

class SwitchLanguage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function changeTo($lang)
	{
		$this->session->set_userdata('language', $lang);
		redirect("Home/index");
	}
}