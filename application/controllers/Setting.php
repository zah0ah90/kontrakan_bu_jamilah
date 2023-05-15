<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('crud_models');
	}

	public function index()
	{
		$this->load->view('backend/setting/index');
	}

	function tabel()
	{
		$data['penyewa'] = $this->crud_models->view(null, 'tbl_profile_landing_page', null)->result();
		$this->load->view('backend/setting/tabel', $data);
	}

	function add()
	{
		$post = $this->input->post(null, true);
		$id        = null;
		$type_save = $post['type_save'];

		$data = [
			'nama' => $post['nama'],
		];

		$add = [
			'adddate'    => date('Y-m-d H:i:s')
		];
		$upd = [
			'upddate'    => date('Y-m-d H:i:s')
		];


		if ($type_save == 'add') {
			// $dataNya = array_merge($data, $add);
			// $save    = $this->crud_models->save('tbl_penyewa_kontrakan', $dataNya);
		} else if ($type_save == 'edit') {
			$id      = $post['id'];
			$dataNya = array_merge($data, $upd);
			$save    = $this->crud_models->update('tbl_profile_landing_page', $dataNya, ['id' => $id]);
		}

		if ($save > 0) {
			$massage = ['status' => true];
		} else {
			$massage = ['status' => false];
		}
		echo json_encode($massage);
	}

	function edit($id)
	{
		$data = $this->crud_models->view(null, 'tbl_profile_landing_page', ['id' => $id])->row();
		echo json_encode($data);
	}

	function berkas($id)
	{
		$data = $this->crud_models->view(null, 'tbl_penyewa_kontrakan_berkas', ['id_penyewa_kontrakan' => $id])->result_array();
		echo json_encode($data);
	}

	function hapusBerkas($id)
	{
		$data = $this->crud_models->view(null, 'tbl_penyewa_kontrakan_berkas', ['id' => $id])->row();
		unlink("uploads/" . $data->nama_berkas);
		$save = $this->crud_models->delete('tbl_penyewa_kontrakan_berkas', ['id' => $id]);
		if ($save > 0) {
			$massage = ['status' => true];
		} else {
			$massage = ['status' => false];
		}
		echo json_encode($massage);
	}
}
