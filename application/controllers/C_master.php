<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
	public function index()
	{
		$this->load->view("header");
		$this->load->view("login");
		$this->load->view("footer");
	}
	public function main()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("main");
		$this->load->view("footer");
	}
	public function daftar()
	{
		$this->load->view("header");

		$this->load->view("daftar");
		$this->load->view("footer");
	}
	public function folio()
	{
		$this->load->view("header");
		$this->load->view("V_folio");
		$this->load->view("footer");
	}
	public function home()
	{
		$this->load->view("header");
		$this->load->view("V_home");
		$this->load->view("footer");
	}
	public function blog()
	{
		$this->load->view("header");
		$this->load->view("V_blog");
		$this->load->view("footer");
	}


}
