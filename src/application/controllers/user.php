<?php

class User extends CI_Controller
{
	public function index()
	{
		
	}

	public function profile()
	{
		
	}

	public function signup()
	{
		if($this->input->post('sent') === false) {
			$this->load->view('user_signup_form');
		} else {
			$completed = true;

			if($this->input->post('username') === false) {
				$completed = false;
			}

			if($this->input->post('email') === false) {
				$completed = false;
			}

			if($this->input->post('password') === false) {
				$$completed = false;
			}

			if($completed) {
				$this->User->insert($this->input->post('username'), $this->input->post('email'), $this->input->post('password'));
			}
		}
	}

	public function signin()
	{

	}
}