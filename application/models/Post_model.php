<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{

public function __construct()
{
	parent::__construct();
	$this->load->database();
}

public function getPost($slug = FALSE)
{
	if ($slug === FALSE) {
		$this->db->order_by('id','DESC');
		$this->db->limit(3);
		$query=$this->db->get('post');
		/* $query=$this->db->get('post');
		$this->db->order_by('created_at','desc'); */
		return $query->result_array();
	}
	$query=$this->db->get_where('post',array('slug' => $slug),1);
	//$query=$this->db->query("SELECT * FROM post WHERE slug='$slug'");
	return $query->row_array(); 
  }

  public function getId($id)
  {
	  $query=$this->db->get_where('post',array('id' => $id),1);
	//$query=$this->db->query("SELECT * FROM post WHERE slug='$slug'");
	return $query->row_array(); 
  }

  public function createPost()
  {
	  $data=array(
		  'title'=>$this->input->post('title'),
		  'slug'=>$this->input->post('slug'),
		  'body'=>$this->input->post('body'),
		  'categories'=>$this->input->post('categories')
	  );
	  $this->db->insert('post',$data);
  }

 public function editPost()
  {
	  $data=array(
		  'title'=>$this->input->post('title'),
		  'slug'=>$this->input->post('slug'),
		  'body'=>$this->input->post('body'),
		  	  );
	  $this->db->where('id',$this->input->post('id'));
	  $this->db->update('post',$data);
  } 

  public function deletePost($id)
  {
	  $this->db->where('id',$id);
	  $this->db->delete('post');
	  return TRUE;
  }
 
  public function getCategory()
  {
	  $query=$this->db->get('categories');
	  return $query->result_array();
  }

  

/*  public function getCategoryDisplay()
  {
	  $query=$this->db->get('categories');
	  return $query->result_array();
  } */
	
}
 
/* End of file Post_model.php */
