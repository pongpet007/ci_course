<<<<<<< HEAD
<?php

class SwitchLanguage extends CI_Controller
{
=======
<?php 

class SwitchLanguage extends CI_Controller
{
	
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
	function __construct()
	{
		parent::__construct();
	}

<<<<<<< HEAD
	function changeTo($lang)
	{
		$this->session->set_userdata('language', $lang);
		redirect("Home/index");
	}
=======
	public function changeTo($lang)
	{
		
		$this->session->set_userdata('language',$lang);
		redirect("Home/index");
	}

>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
}