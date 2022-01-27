<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
		public function index()
	{
		$this->load->view("V_about");
	}


}
