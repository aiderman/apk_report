<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
	public function index()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("index");
		$this->load->view("footer");
	}
	public function login()
	{
		$this->load->view("header");
		$this->load->view("login");
	}
	public function logout()
	{
		$this->load->view("header");
		$this->load->view("login");
	}
	public function daftar()
	{
		$this->load->view("header");
		$this->load->view("daftar");
	}
	public function profile()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("user-profile");
		$this->load->view("footer");
	}


	public function add_news()
	{
		// $this->load->view("header");
		// $this->load->view("navbar");
		$this->load->view("add_news");
		// $this->load->view("a/registration-wizard-version");
		// $this->load->view("footer");
	}
	public function add_news1()
	{
		// $this->load->view("header");
		// $this->load->view("navbar");
		$this->load->view("a/registration-wizard-version");
		// $this->load->view("a/registration-wizard-version");
		// $this->load->view("footer");
	}
	public function galery()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("slider-top");
		$this->load->view("footer");
	}
	public function faq()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("faq");
		$this->load->view("footer");
	}

	public function tracking()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("tracking");
		$this->load->view("footer");
	}
}
