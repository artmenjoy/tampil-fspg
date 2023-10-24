<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('table_kegiatan');
	}
	public function index()
	{
		$param['id'] = 1;
		$data = $this->table_kegiatan->get($param);
		// $data['titles'] = "Tampil Peserta";
		$this->load->view('partials/head');
		$this->load->view('main/index', compact('data'));

		$this->load->view('partials/foot');
	}
	public function login()
	{
		$this->load->view('partials/head');
		$this->load->view('main/login');
		$this->load->view('partials/foot');
	}

	public function setting()
	{
		$param['id'] = 1;
		$data = $this->table_kegiatan->get($param);
		// $data['titles'] = "Admin Getsemani";


		// echo print_R($data);
		// die();
		$this->load->view('partials/head');
		$this->load->view('main/edit', compact('data'));
		$this->load->view('partials/foot');
	}
	public function viewdata()
	{
		$param['id'] = 1;
		$data = $this->table_kegiatan->get($param);

		// echo print_R($data);
		// die();
		$this->load->view('main/dataonly', compact('data'));
	}

	public function setting_update()
	{
		$param['id'] = 1;
		$data_awal = $this->table_kegiatan->get($param);

		$id['id'] = 1;
		$data['bersiap'] = $this->input->post('baru');
		$data['persiapan_1'] = $data_awal->bersiap;
		$data['persiapan_2'] = $data_awal->persiapan_1;
		$data['verifikasi'] = $data_awal->persiapan_2;
		$data['tampil'] = $data_awal->verifikasi;

		$this->table_kegiatan->update($id, $data);
		redirect('main/setting');
	}

	public function setting_delete()
	{
		$param['id'] = 1;
		$data_awal = $this->table_kegiatan->get($param);

		$id['id'] = 1;
		$data['bersiap'] = $data_awal->persiapan_1;
		$data['persiapan_1'] = $data_awal->persiapan_2;
		$data['persiapan_2'] = "$data_awal->verifikasi";
		$data['verifikasi'] = "$data_awal->tampil";
		$data['tampil'] = "";

		$this->table_kegiatan->update($id, $data);
		redirect('main/setting');
	}
}
