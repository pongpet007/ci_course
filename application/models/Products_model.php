<?php

<<<<<<< HEAD
class Products_model extends CI_Model
{

	public function count()
    {
       
        $this->db->from('products');       

        return $this->db->count_all_results();

    }

    public function getAll($start=0 , $perpage=0)
    {

    	$lang = $this->session->userdata('language');

        if ($lang == 'TH')
        {
        	$this->db->order_by('pro_name_th', 'ASC');

        }
        else
        {
        	$this->db->order_by('pro_name_en', 'ASC');
        }

        $this->db->limit($perpage,$start);

		$query = $this->db->get('products');

=======
class Products_model extends CI_Model {
   
    public function count()
    {        
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function getAll($start=0 , $perpage=0, $keyword='')
    {
    	$lang = $this->session->userdata('language');
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('pro_id','RANDOM');
        // if($lang=='TH'){
        //     $this->db->order_by('pro_name_th', 'ASC');
        // }
        // else{
        //      $this->db->order_by('pro_name_en', 'ASC');
        // }
        $this->db->limit($perpage,$start);
		$query = $this->db->get();
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
		return $query->result();
    }

    public function getOne($id)
    {
        $this->db->where('pro_id',$id);
        $query = $this->db->get('products');
<<<<<<< HEAD

        return $query->row(0);
    }

=======
        return $query->row(0);
    }


>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
}