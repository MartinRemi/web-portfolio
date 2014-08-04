<?php

class News extends CI_Controller
{
	public function index()
	{
		$data = array();
		$this->load->model('newsModel', 'News');
		// Retrieve news
		$data['news'] = $this->News->retrieveAll();

		// Load view
		$this->load->view('news_display', $data);
	}

	public function add()
	{
		$this->lang->load('english', 'english');
		$data = array();
		$data['news_add_input_error'] = "";
		$data['error_encountered_errors'] = $this->lang->line('error_encountered_errors');

		if(!$this->session->userdata('username')) {
			$data['rm_error'] = $this->lang->line('error_not_connected');
			$this->load->view('error_display', $data);
		} else {
			if($this->input->post('news_add_sent') === false) { // Form not sent
				$this->load->view('news_add_form', $data);
			} else {
				$completed = true;
	
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$id_author = $this->session->userdata('id');

				if($title === false || $title == "") {
					$completed = false;
					$data['news_add_input_error'] .= '<li>' . $this->lang->line('error_news_no_title') . '</li>';
				}
				if($content === false || $content == "") {
					$completed = false;
					$data['news_add_input_error'] .= '<li>' . $this->lang->line('error_news_no_content') . '</li>';
				}

				if($completed) {
					$this->load->model('newsModel', 'News');
					$this->News->insert($id_author, $title, $content);
					$data['rm_error'] = $this->lang->line('success_account_created');
					$this->load->view('error_display', $data);
				} else {
					$this->load->view('news_add_form', $data);
				}
			}
		}
	}
}