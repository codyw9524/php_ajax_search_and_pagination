<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Lead');
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	function index_html()
	{
		$data['parsed'] = $this->Lead->index();
		$data['leads'] = $this->Lead->index_paged();
		$this->load->view('partial', $data);
	}
	function search()
	{
		$data['parsed'] = $this->Lead->search_paged($this->input->post());
		$data['leads'] = $this->Lead->search($this->input->post());
		$this->load->view('partial', $data);
	}
}