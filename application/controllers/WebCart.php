<<<<<<< HEAD
<?php

class WebCart extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
=======
<?php 

class WebCart extends CI_controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
		if($this->session->userdata('language')==''){
			$this->session->set_userdata('language','TH');
		}
		$this->lang->load($this->session->userdata('language'), 'lang');
		
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
	}

	public function index()
	{
<<<<<<< HEAD
		$cart = $this->cart->contents();
		print_r($cart);
=======
		$data['lang'] = $this->session->userdata('language');
		
		$this->load->view('watchshop/cart',$data);
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
	}

	public function add()
	{
<<<<<<< HEAD
		$pro_id = $this->input->post("pro_id");
		$qty = $this->input->post("qty");
		$product = $this->Product_model->getOne($pro_id);

		$data = array(
			'id' => $pro_id,
			'qty' => $qty,
			'price' => $product->pro_price,
			'name' => array('TH' => $product->pro_name_th, 'EN' => $product->pro_name_en)
		);

		$this->cart->insert($data);

		redirect("WebCart");
=======
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
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
	}

	public function edit()
	{
<<<<<<< HEAD
		redirect("WebCart");
	}

	public function delete($pro_id)
	{
		redirect("WebCart");
	}

}
=======
		$qty = $this->input->post('qty');
		$rowid = $this->input->post('rowid');
		$data = array();
		foreach ($qty as $key=>$qty_item) {
			$data[] = array(
				'rowid'=>$rowid[$key],
				'qty'=>$qty[$key],
			);
		}
		
		$this->cart->update($data);
		
		redirect("WebCart/index");
		
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect("WebCart/index");
	}

}
 ?>
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
