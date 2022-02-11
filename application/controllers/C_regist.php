<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_regist extends CI_Controller
{
	public function index()
	{
		$this->load->view("regist");
	}
	public function wizard()
	{
		
		$this->load->view("wizard");
	}
}
