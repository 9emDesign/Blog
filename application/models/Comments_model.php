<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function createComment()
	{
		$data=array(
			
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'comment_body'=>$this->input->post('comment_body')
		);
		return $this->db->insert('comments',$data);
	}



	public function getComments()
	{
		
		//$this->db->where('id',$id);
		$query=$this->db->get('comments');
		return $query->result_array();
	}

}

/* End of file Comments_model.php */
