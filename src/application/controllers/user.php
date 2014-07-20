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

			if($username === false || $username == "") {
				$completed = false;
				$data['input_error'] .= "<li>You must set a username</li>";
			}

			if($email === false || $email == "") {
				$completed = false;
				$data['input_error'] .= "<li>You must set an email.</li>";
			} else {
				$this->load->helper('email');
				if(!valid_email($email)) {
					$completed = false;
					$data['input_error'] .= "<li>The email provided is not valid.</li>";
				}
			}

			if($password === false || $password == "") {
				$completed = false;
				$data['input_error'] .= '<li>You must set a password</li>';
			}

			if($completed) {
				// Using user model
				$this->load->model('userModel', 'User');

				if(!empty($this->User->retrieveByUsername($username))) {
					$completed = false;
					$data['input_error'] .= "<li>The username provided is already taken.</li>";
				}

				if(!empty($this->User->retrieveByEmail($email))) {
					$completed = false;
					$data['input_error'] = "<li>The email provided is already being used.</li>";
				}

				if($completed) {
					$this->User->insert($username, $email, $password);
				} else {
					$this->load->view('user_signup_form', $data);
				}
			} else {
				$this->load->view('user_signup_form', $data);
			}
		}
	}

	public function signin()
	{

	}
}