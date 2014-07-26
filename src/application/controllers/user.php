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
		$this->lang->load('english', 'english');
		$data = array();
		$data['input_error'] = "";

		$data['error_encountered_errors'] = $this->lang->line('error_encountered_errors');

		if($this->input->post('signup_sent') === false) {
			$this->load->view('user_signup_form', $data);
		} else {
			$completed = true;

			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($username === false || $username == "") {
				$completed = false;
				$data['input_error'] .= "<li>" . $this->lang->line('error_missing_username') . "</li>";
			}

			if($email === false || $email == "") {
				$completed = false;
				$data['input_error'] .= "<li>" . $this->lang->line('error_missing_email') . "</li>";
			} else {
				$this->load->helper('email');
				if(!valid_email($email)) {
					$completed = false;
					$data['input_error'] .= "<li>" . $this->lang->line('error_invalid_email') . "</li>";
				}
			}

			if($password === false || $password == "") {
				$completed = false;
				$data['input_error'] .= '<li>' . $this->lang->line('error_missing_password') . '</li>';
			}

			if($completed) {
				// Using user model
				$this->load->model('userModel', 'User');

				if(!empty($this->User->retrieveByUsername($username))) {
					$completed = false;
					$data['input_error'] .= "<li>" . $this->lang->line('error_taken_username') . "</li>";
				}

				if(!empty($this->User->retrieveByEmail($email))) {
					$completed = false;
					$data['input_error'] = "<li>" . $this->lang->line('error_taken_email') . "</li>";
				}

				if($completed) {
					$this->User->insert($username, $email, $password);
					$data['rm_error'] = $this->lang->line('success_account_created');
					$this->load->view('error_display', $data);
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
		$data = array();
		$data['signin_input_error'] = "";

		if(!$this->session->userdata('username')) {
			$data['rm_error'] = "You are already connected.";
			$this->load->view('error_display', $data);
		} else {
			if($this->input->post('signin_sent') === false) {
				$this->load->view('user_signin_form', $data);
			} else {

			}
		}
	}
}