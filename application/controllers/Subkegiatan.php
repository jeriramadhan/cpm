<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkegiatan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MSubkegiatan', 'm_subkegiatan');
		// $this->load->model('MKriteria', 'm_kriteria');
		// $this->load->model('MPendaftar', 'm_pendaftar');
	}

	public function index() {
		$data = $this->m_subkegiatan->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('subkegiatan/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'subkegiatan/indexjs']);
	}

	public function createSubkegiatan()
	{
		if (!empty($_POST)) {
			$this->m_subkegiatan->insert_entry();
			redirect('subkegiatan/index');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('subkegiatan/createsubkegiatan');
		$this->load->view('layout/footer', ['js' => 'subkegiatan/createjs']);
	}

	public function updateSubkegiatan($id)
	{
		if (!empty($_POST)) {
			$this->m_subkegiatan->update_entry();
			redirect('subkegiatan/index');
		}

		$data = $this->m_subkegiatan->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('subkegiatan/updatesubkegiatan', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'proyek/updatejs']);
	}

	public function deleteSubkegiatan($id)
	{
		$this->m_subkegiatan->delete_entry($id);
		redirect('subkegiatan/index');
	}
}
