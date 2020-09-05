<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MProyek', 'm_proyek');
		// $this->load->model('MKriteria', 'm_kriteria');
		// $this->load->model('MPendaftar', 'm_pendaftar');
	}

	public function index() {
		$data = $this->m_proyek->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('proyek/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'proyek/indexjs']);
	}

	public function createProyek()
	{
		if (!empty($_POST)) {
			$this->m_proyek->insert_entry();
			redirect('proyek/index');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('proyek/createproyek');
		$this->load->view('layout/footer', ['js' => 'proyek/createjs']);
	}

	public function updateProyek($id)
	{
		if (!empty($_POST)) {
			$this->m_proyek->update_entry();
			redirect('proyek/index');
		}

		$data = $this->m_proyek->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('proyek/updateproyek', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'proyek/updatejs']);
	}

	public function deleteProyek($id)
	{
		$this->m_proyek->delete_entry($id);
		redirect('menu/pendaftar');
	}
}
