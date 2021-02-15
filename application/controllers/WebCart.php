<?php 

class WebCart extends CI_controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');

	}

	public function index()
	{
		$cartxx = $this->cart->contents();		
		print_r($cartxx);
	}

	public function add()
	{
		// foreach ($this->input->post() as $key => $value) {
		// 	// echo "$key = $value";
		// 	echo "\$$key = \$this->input->post('$key');<br>";
		// }
		$this->load->library('cart');

		$pro_id = $this->input->post('pro_id');		
		$qty = $this->input->post('qty');
		$product = $this->Products_model->getOne($pro_id);
		
		$data = array(
        'id'      => "$pro_id",
        'qty'     => "$qty",
        'price'   => "$pro_id",
        'name'    => $product->pro_name_en,
        'options' => array('TH'=>$product->pro_name_th,'EN'=>$product->pro_name_en), 
		);
		$this->cart->insert($data);
		redirect("WebCart/index");
	}

	public function edit()
	{
		redirect("WebCart/index");
	}

	public function delete($pro_id)
	{
		redirect("WebCart/index");
	}

}
 ?>