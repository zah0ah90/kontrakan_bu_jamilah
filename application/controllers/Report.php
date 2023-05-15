<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('crud_models');
	}
	public function index()
	{
		$this->load->view('backend/report/index');
	}

	function tabel()
	{
		$post = $this->input->post(null, true);
		$filterawal = $post['filterawal'];
		$filterakhir = $post['filterakhir'];
		$status = $post['status'];

		$query = "SELECT * FROM tbl_penyewa_kontrakan WHERE adddate BETWEEN '$filterawal' AND '$filterakhir' AND status=$status";
		$dataNya = $this->db->query($query)->result();

		$data['penyewa'] = $dataNya;
		$this->load->view('backend/report/tabel', $data);
	}
}
