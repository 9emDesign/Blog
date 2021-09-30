<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {
	
	public function create()
	{
		
		$data['header']='Create new post';
		$data['title']= 'Create new post';
		$data['categories']=$this->Post_model->getCategory();
		if (!$this->session->userdata('logged_in')) {
			redirect('login');	
		}
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[25]');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required|min_length[25]');
		$this->form_validation->set_rules('body', 'Body', 'trim|required');
		//$this->session->set_flashdata('success', 'New post has been added!');
		if ($this->form_validation->run() === FALSE) {

		$this->load->view('includes/header',$data);
		$this->load->view('posts/create',$data);
		$this->load->view('includes/footer');
		}else{
		$this->Post_model->createPost();
		$this->load->view('includes/header',$data);
		$this->load->view('posts/create',$data);
		$this->load->view('includes/footer');
		$this->session->set_flashdata('success', 'New post has been added!');
		
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('login');	
		}
		$data['header']='Delete post';
		$data['title']= 'Delete post';
		$this->Post_model->deletePost($id);
		redirect('posts/');
	}

	public function edit($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('login');	
		}
		$data['row']=$this->Post_model->getId($id);
		$data['records']=$this->Post_model->getPost();
		$data['header']='Edit post';
		$data['title']= 'Edit post';		
		$this->load->view('includes/header',$data);
		$this->load->view('posts/edit',$data);
		$this->load->view('includes/footer');
		
	}

	public function update()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('login');	
		}
		$this->Post_model->editPost();
		redirect('posts');
	}

}


