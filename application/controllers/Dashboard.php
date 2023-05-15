<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('crud_models');
	}

	public function index()
	{
		$data['total'] = $this->db->query("SELECT count(id) as id FROM tbl_penyewa_kontrakan")->row()->id;
		$data['total_kontrakan'] = $this->db->query("SELECT nama FROM tbl_profile_landing_page where type='total_kontrakan'")->row()->nama;
		$data['going'] = $this->db->query("SELECT count(id) as id FROM tbl_penyewa_kontrakan WHERE status=1")->row()->id;
		$this->load->view('backend/dashboard/index', $data);
	}
}
