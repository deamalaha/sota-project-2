<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	public function index()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
		);
		$this->load->view('user/index', $data);
	}
	public function explore()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
		);
		$this->load->view('user/tab/explore', $data);
	}
	public function detail_product($id)
	{
		$where = array('id_produk' => $id);
		$data = array('produk' => $this->Crud->gw('produk', $where));
		$this->load->view('user/tab/detail-product', $data);
	}
}
