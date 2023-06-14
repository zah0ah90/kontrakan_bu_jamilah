<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa_kontrakan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('crud_models');
	}

	public function index()
	{

		$this->load->view('backend/penyewa_kontrakan/index');
	}

	function tabel()
	{
		$data['penyewa'] = $this->crud_models->view(null, 'tbl_penyewa_kontrakan', null)->result();
		$this->load->view('backend/penyewa_kontrakan/tabel', $data);
	}

	function add()
	{
		$post = $this->input->post(null, true);
		$id        = null;
		$type_save = $post['type_save'];

		$data = [
			'nama' => $post['nama'],
			'nomor_telepon' => $post['nomor_telepon'],
			'daerah_asal' => $post['daerah_asal'],
			'jumlah_orang' => $post['jumlah_orang'],
			'status' => $post['status']
		];

		$add = [
			'adddate'    => date('Y-m-d H:i:s')
		];
		$upd = [
			'upddate'    => date('Y-m-d H:i:s')
		];



		// die();




		if ($type_save == 'add') {
			$dataNya = array_merge($data, $add);
			$save    = $this->crud_models->save('tbl_penyewa_kontrakan', $dataNya);
			// upload
			//upload file
			$idNya = $this->db->insert_id();
			// echo '<pre>';
			// print_r($idNya);
			// die();
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$this->load->library('upload', $config);

			if (!empty($_FILES)) {
				$jumlah_berkas = count($_FILES['berkas']['name']);


				for ($i = 0; $i < $jumlah_berkas; $i++) {
					if (!empty($_FILES['berkas']['name'][$i])) {
						$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
						$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
						$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
						// echo '<pre>'; print_r($_FILES['file']['name']); 

						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$dataUpload['nama_berkas'] = $uploadData['file_name'];
							$dataUpload['id_penyewa_kontrakan'] = $idNya;
							$dataUpload['adddate'] = date('Y-m-d H:i:s');
							$this->db->insert('tbl_penyewa_kontrakan_berkas', $dataUpload);
						}
					}
				}
			}
		} else if ($type_save == 'edit') {
			$id      = $post['id'];
			$dataNya = array_merge($data, $upd);
			$save    = $this->crud_models->update('tbl_penyewa_kontrakan', $dataNya, ['id' => $id]);

			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$this->load->library('upload', $config);

			if (!empty($_FILES)) {
				$jumlah_berkas = count($_FILES['berkas']['name']);


				for ($i = 0; $i < $jumlah_berkas; $i++) {
					if (!empty($_FILES['berkas']['name'][$i])) {
						$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
						$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
						$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
						// echo '<pre>'; print_r($_FILES['file']['name']); 

						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$dataUpload['nama_berkas'] = $uploadData['file_name'];
							$dataUpload['id_penyewa_kontrakan'] = $id;
							$dataUpload['adddate'] = date('Y-m-d H:i:s');
							$this->db->insert('tbl_penyewa_kontrakan_berkas', $dataUpload);
						}
					}
				}
			}
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
		$data = $this->crud_models->view(null, 'tbl_penyewa_kontrakan', ['id' => $id])->row();
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

	function ceksisakontrakan()
	{
		$totalKontrakan = $this->crud_models->view(null, 'tbl_profile_landing_page', ['type' => 'total_kontrakan'])->row()->nama;
		$totalNgontrak = $this->db->query("SELECT count(id) as id FROM tbl_penyewa_kontrakan WHERE status=1")->row()->id;
		$total = $totalKontrakan - $totalNgontrak;
		if ($total > 0) {
			$massage['status'] = true;
		} else {
			$massage['status'] = false;
		}
		echo json_encode($massage);
	}
}
