<?php

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

		return $query->result();
    }

    public function getOne($id)
    {
        $this->db->where('pro_id',$id);
        $query = $this->db->get('products');

        return $query->row(0);
    }

}