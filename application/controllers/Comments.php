<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Comments extends CI_Controller
{

	public function create($id)
	{
				
		$data['post'] = $this->Comments_model->getComments($id);
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === FALSE) {
			$data['header']='View Posts';
			$data['post']=$this->Post_model->getId($id);
		   	$this->load->view('includes/header',$data);
			$this->load->view('posts/view', $data);
			$this->load->view('includes/footer');
		} else {
			$data['header']='View Posts';
			$data['post']=$this->Post_model->getId($id);
			$data['comments']=$this->Comments_model->getComments();
			$data['comments']=$this->Comments_model->createComment($id);
			$this->load->view('includes/header',$data);
			$this->load->view('posts/view', $data);
			$this->load->view('includes/footer'); 
		}
	}

	
}

/* End of file Comments.php */
