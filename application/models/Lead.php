<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Model {

	public function index()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}
	function index_paged()
	{
		return $this->db->query("SELECT * FROM users LIMIT 0, 4")->result_array();
	}
	function search_paged($post)
	{
		if($this->input->post('date_to') != "")
		{
			if($post['date_from'] != "")
			{
				$date = new DateTime($post['date_from']);
				$myArray = (array)$date;
				$date_from = $myArray['date'];
			}
			else
			{
				$date_from = $post['date_from'];
			}
			$date = new DateTime($post['date_to']);
			$myArray = (array)$date;
			$date_to = $myArray['date'];
			$search_term = $post['name'] . "%";
			return $this->db->query("SELECT * FROM users 
									WHERE (first_name 
									LIKE ? OR last_name LIKE ?) AND created_at
									IN (SELECT created_at FROM users WHERE created_at >= ? AND created_at <= ?)", array($search_term, $search_term, $date_from, $date_to))->result_array();
		}
		else
		{
			if($post['date_from'] != "")
			{
				$date = new DateTime($post['date_from']);
				$myArray = (array)$date;
				$date_term = $myArray['date'];
			}
			else
			{
				$date_term = $post['date_from'];
			}
			$search_term = $post['name'] . "%";
			return $this->db->query("SELECT * FROM users 
									WHERE (first_name 
									LIKE ? OR last_name LIKE ?) AND created_at
									IN (SELECT created_at FROM users WHERE created_at >= ?)", array($search_term, $search_term, $date_term))->result_array();
		}
	}
	function search($post)
	{
		if($this->input->post('date_to') != "")
		{
			if($post['date_from'] != "")
			{
				$date = new DateTime($post['date_from']);
				$myArray = (array)$date;
				$date_from = $myArray['date'];
			}
			else
			{
				$date_from = $post['date_from'];
			}
			$date = new DateTime($post['date_to']);
			$myArray = (array)$date;
			$date_to = $myArray['date'];
			$search_term = $post['name'] . "%";
			if($this->input->post('page_number') > 1)
			{
				$limiter = ($this->input->post('page_number') -1) * 4;
			}
			else
			{
				$limiter = 0;
			}
			return $this->db->query("SELECT * FROM users 
									WHERE (first_name 
									LIKE ? OR last_name LIKE ?) AND created_at
									IN (SELECT created_at FROM users WHERE created_at >= ? AND created_at <= ?) LIMIT ?, 4", array($search_term, $search_term, $date_from, $date_to, $limiter))->result_array();
		}
		else
		{
			if($post['date_from'] != "")
			{
				$date = new DateTime($post['date_from']);
				$myArray = (array)$date;
				$date_term = $myArray['date'];
			}
			else
			{
				$date_term = $post['date_from'];
			}
			if($this->input->post('page_number') > 1)
			{
				$limiter = ($this->input->post('page_number') - 1) * 4;
			}
			else
			{
				$limiter = 0;
			}
			$search_term = $post['name'] . "%";
			return $this->db->query("SELECT * FROM users 
									WHERE (first_name 
									LIKE ? OR last_name LIKE ?) AND created_at
									IN (SELECT created_at FROM users WHERE created_at >= ?) LIMIT ?, 4", array($search_term, $search_term, $date_term, $limiter))->result_array();
		}
	}
}
