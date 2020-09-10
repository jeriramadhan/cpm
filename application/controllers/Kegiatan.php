<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MKegiatan', 'm_kegiatan');
		// $this->load->model('MKriteria', 'm_kriteria');
		// $this->load->model('MPendaftar', 'm_pendaftar');
	}

	public function index() {
		$data = $this->m_kegiatan->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kegiatan/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'proyek/indexjs']);
	}

	public function createKegiatan()
	{
		if (!empty($_POST)) {
			$this->m_kegiatan->insert_entry();
			redirect('kegiatan/index');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kegiatan/createkegiatan');
		$this->load->view('layout/footer', ['js' => 'proyek/createjs']);
	}

	public function updateKegiatan($id)
	{
		if (!empty($_POST)) {
			$this->m_kegiatan->update_entry();
			redirect('kegiatan/index');
		}

		$data = $this->m_kegiatan->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kegiatan/updatekegiatan', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'proyek/updatejs']);
	}

	public function deleteKegiatan($id)
	{
		$this->m_kegiatan->delete_entry($id);
		redirect('kegiatan/index');
	}
}
