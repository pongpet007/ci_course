<?php 

class Qr extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('MyQrcode');
	}

	public function index()
	{
		 $this->myqrcode->png('http://www.sanook.com');
	}

	public function demo1()
	{
		$url ='https://www.bing.com/search?q=php+qrcode&qs=n&form=QBRE&sp=-1&pq=php+qrcode&sc=8-10&sk=&cvid=9ACDFC40D4F649E7BB81476DACFFD1B6';
		//  $this->myqrcode->png($url,false,'QR_ECLEVEL_L',2);
		// $this->myqrcode->png($url,false,'QR_ECLEVEL_M',6);
		//  $this->myqrcode::png($url,false,'QR_ECLEVEL_Q',8);
		$this->myqrcode->png($url,false,'QR_ECLEVEL_H',10);
	}

}