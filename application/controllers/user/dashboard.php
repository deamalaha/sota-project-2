<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	public function index()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
			'title' => 'Halaman Dashboad',
		);
		$this->load->view('user/index', $data);
	}
	public function explore()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
			'title' => 'Halaman Dashboad',
		);
		$this->load->view('user/tab/explore', $data);
	}
	public function detail_product()
	{
		$this->load->view('user/tab/detail-product');
	}
}
