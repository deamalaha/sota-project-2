<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');
		if ($this->session->userdata('active') != "active") { //Belum Login
			$alertDanger = '
                <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c90831;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Belum Login!</strong> Silahkan Login Terlebih dahulu.
                </div>
            ';
			$this->session->set_flashdata('info', $alertDanger);
			redirect('admin/login');
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
			'title' => 'Halaman Dashboad',
			'isi' => 'admin/dashboard/isi',
		);
		$this->load->view('admin/_layouts/wrapper', $data);
	}

	public function produk()
	{
		$data = array(
			'produk' => $this->Crud->ga('produk'),
			'title' => 'Produk',
			'isi' => 'admin/dashboard/data_produk',
		);
		$this->load->view('admin/_layouts/wrapper', $data);
	}

	public function tambah_produk()
	{
		$nama_produk = $this->input->post('nama_produk');
		$keterangan  = $this->input->post('keterangan');
		$kategori    = $this->input->post('kategori');
		$harga       = $this->input->post('harga');
		$stok        = $this->input->post('stok');
		$gambar      = $_FILES['gambar']['name'];
		if ($gambar = '') {
		} else {
			$config['upload_path'] = './assets/gambarProduk';
			$config['allowed_types']    = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_produk'  => $nama_produk,
			'keterangan'   => $keterangan,
			'kategori'     => $kategori,
			'harga'        => $harga,
			'stok'         => $stok,
			'gambar'       => $gambar
		);
		$info = '
                     <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Berhasil !</strong> Data telah ditambah.
                    </div>
                ';
		$this->Crud->i('produk', $data);
		$this->session->set_flashdata('info', $info);
		redirect('admin/dashboard/produk/');
	}

	public function edit_produk($id)
	{
		$where = array('id_produk' => $id);
		$input = $this->input->post(NULL, TRUE);
		$data = array(
			'id_produk'     => $input['id_produk'],
			'nama_produk'   => $input['nama_produk'],
			'keterangan'    => $input['keterangan'],
			'kategori'      => $input['kategori'],
			'harga'         => $input['harga'],
			'stok'          => $input['stok'],
		);
		$info = '
                     <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Berhasil !</strong> Data telah Diedit.
                    </div>
                ';

		$this->Crud->u('produk', $data, $where);
		$this->session->set_flashdata('info', $info);
		redirect('admin/dashboard/produk');
	}

	public function edit()
	{
		$id  = $this->input->post('id');
		$nama_produk  = $this->input->post('nama_produk');
		$keterangan  = $this->input->post('keterangan');
		$kategori  = $this->input->post('kategori');
		$harga  = $this->input->post('harga');
		$stok  = $this->input->post('stok');

		$data = array(
			'nama_produk'   => $nama_produk,
			'keterangan'    => $keterangan,
			'kategori'      => $kategori,
			'harga'         => $harga,
			'stok'          => $stok,
		);

		$where = array(
			'id_produk' => $id
		);
		$info = '
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Berhasil !</strong> Data telah diedit
                </div>
                ';

		$this->Crud->u('produk', $data, $where);
		$this->session->set_flashdata('info', $info);
		redirect('admin/dashboard/produk');
	}

	public function delete_produk($id)
	{
		$where = array(
			'id_produk' => $id
		);
		$info = '
                <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c90831;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Berhasil!</strong> Data telah dihapus.
                </div>
            ';
		$this->Crud->d('produk', $where);
		$this->session->set_flashdata('info', $info);
		redirect('admin/dashboard/produk');
	}
}
