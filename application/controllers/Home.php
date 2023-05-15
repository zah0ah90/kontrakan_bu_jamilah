<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('crud_models');
	}

	public function index()
	{
		$totalKontrakan = $this->crud_models->view(null, 'tbl_profile_landing_page', ['type' => 'total_kontrakan'])->row()->nama;
		$totalNgontrak = $this->db->query("SELECT count(id) as id FROM tbl_penyewa_kontrakan WHERE status=1")->row()->id;

		$data['total'] = $totalKontrakan - $totalNgontrak;
		$data['nomorWhatsapp'] = $this->crud_models->view(null, 'tbl_profile_landing_page', ['type' => 'whatsapp'])->row()->nama;
		$data['bulanan'] = $this->crud_models->view(null, 'tbl_profile_landing_page', ['type' => 'bulanan'])->row()->nama;
		$data['tahunan'] = $this->crud_models->view(null, 'tbl_profile_landing_page', ['type' => 'tahunan'])->row()->nama;

		$this->load->view('frontend/home/index', $data);
	}
}
