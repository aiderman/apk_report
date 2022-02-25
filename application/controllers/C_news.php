<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_news extends CI_Controller
{
	public function index()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("index");
		$this->load->view("footer");
	}
	
	public function add_news()
	{
		$this->load->view("add_news");
	}
	public function wizard_news()
	{
		$this->load->view("wizard_news");
		
	}
}
