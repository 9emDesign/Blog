<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{

	public function index()
	{
		$data['header']='Latest Post';
		$data['title']= 'Latest Post';
		$data['post']=$this->Post_model->getPost();
		$this->load->view('includes/header',$data);
		$this->load->view('posts/index',$data);
		$this->load->view('includes/footer');
	}

	public function view($id)
	{
		
		$data['post']=$this->Post_model->getId($id);
		$data['comments']=$this->Comments_model->getComments();
		$data['row']=$this->Post_model->getId($id);
		$data['header']='View Post';
		$data['title']='View Post';
		$this->load->view('includes/header',$data);
		$this->load->view('posts/view',$data);
		$this->load->view('includes/footer');
		
	}

	
}

/* End of file Posts.php */
