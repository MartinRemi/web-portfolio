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
		$data = array();
		$data['input_error'] = "";

		if($this->input->post('sent') === false) {
			$this->load->view('user_signup_form');
		} else {
			$completed = true;

			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($username === false) {
				$completed = false;
				$data['input_error'] .= "You must set a username";
			}

			if($email === false) {
				$completed = false;
				$data['input_error'] .= "You must set an email.";
			}

			if($password === false) {
				$completed = false;
				$data['input_error'] .= 'You must set a password';
			}

			if($completed) {
				// Using user model
				$this->load->model('userModel', 'User');

				if(!empty($this->User->retrieveByUsername($username))) {
					$completed = false;
					$data['input_error'] .= "The username provided is already taken.";
				}

				if(!empty($this->User->retrieveByEmail($email))) {
					$completed = false;
					$data['input_error'] = "The email provided is already being used.";
				}

				if($completed) {
					$this->User->insert($username, $email, $password);
				} else {
					$this->load->view('user_signup_form', $data);
				}
			}
		}
	}

	public function signin()
	{

	}
}