<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function index($page = 'home')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}
		$data['header']=ucfirst($page);
		$data['title']= ucfirst($page);
		$data['home']=$this->Post_model->getPost();
		$this->load->view('includes/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('includes/footer');
	}
 
	
}

/* End of file Pages.php */
