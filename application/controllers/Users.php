<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register()
	{
		$data['title']='Registration';
		$data['header']='Registration';
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirm_pass', 'Confirm password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('includes/header',$data);
			$this->load->view('users/register',$data);
			$this->load->view('includes/footer');
		}else{
			$encrypt=md5($this->input->post('password'));
			$this->User_model->registerUser($encrypt);
			$this->session->set_flashdata('success','New user has been added!');
			redirect('register');
		}
	}

	public function login()
	{
		$data['title']='Login User';
		$data['header']='Login User';
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('includes/header',$data);
			$this->load->view('users/login',$data);
			$this->load->view('includes/footer');
		}else{
			$data['header']='Dashboard';
			$data['title']='Dashboard';
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$user_id=$this->User_model->login($email,$password);
				if ($user_id) {
				//die('Success!');
				$userData= array(
					'user_id'=>$user_id,
					'email'=>$email,
					'logged_in'=>true
				);
				$this->session->set_userdata($userData);
				//$this->session->set_flashdata('success','You are logged in!');
				$this->load->view('includes/header',$data);	
				$this->load->view('users/dashboard');
				$this->load->view('includes/footer');
					
				}else{
				$data['header']='Dashboard';
				$data['title']='Dashboard';
				$this->load->view('includes/header',$data);	
				$this->load->view('users/login');
				$this->load->view('includes/footer');
				//$this->session->set_flashdata('failed','Your login failed,please try again!');
				
			}

			
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

}

/* End of file Users.php */
