<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('user/index');
	}
	public function explore()
	{
		$this->load->view('user/tab/explore');
	}
	public function detail_product()
	{
		$this->load->view('user/tab/detail-product');
	}
}
