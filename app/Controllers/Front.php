<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Datasiswa_model;

class Front extends BaseController {
	public function index() {
		$data['title'] = "Dashboard";

		echo view('index', $data);
	}

	public function table_siswa() {
		$data['title'] = "Edit Data Siswa";
		
		$model = new Datasiswa_model();
		$data['data_siswa'] = $model->get_data_siswa()->getResult();
		$data['gender'] = $model->get_gender()->getResult();
		$data['agama'] = $model->get_agama()->getResult();
		echo view('pages/edit_data', $data);
	}

	public function save() {
		$model = new Datasiswa_model();
		$data = array(
			'nama' => $this->request->getPost('nama_siswa'),
			'nisn' => $this->request->getPost('nisn_siswa'),
			'tempat_lahir' => $this->request->getPost('tempat_lahir'),
			'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'asal_sekolah' => $this->request->getPost('sekolah'),
            'alamat' => $this->request->getPost('alamat'),
            'id_gender' => $this->request->getPost('jenis_kelamin'),
            'id_agama' => $this->request->getPost('agama')
		);

		$model->simpan_data_siswa($data);
		return redirect()->to('/tambah');
	}

	public function update() {
		$model = new Datasiswa_model();
		$id = $this->request->getPost('nisn_siswa');
        $data = array(
			'nama' => $this->request->getPost('nama_siswa'),
			'tempat_lahir' => $this->request->getPost('tempat_lahir'),
			'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'asal_sekolah' => $this->request->getPost('sekolah'),
            'alamat' => $this->request->getPost('alamat'),
            'id_gender' => $this->request->getPost('jenis_kelamin'),
            'id_agama' => $this->request->getPost('agama')
		);

        $model->edit_data_siswa($data, $id);
		return redirect()->to('/edit');
	}

	public function delete() {
		$model = new Datasiswa_model();
		$id = $this->request->getPost('nisn_siswa');

        $model->hapus_data_siswa($id);
        return redirect()->to('/edit');
	}

	public function register_form() {
		$model = new Datasiswa_model();
		$data = array(
			'title' => 'Tambah Data Siswa',
			'agama' => $model->get_agama()->getResult()
		);

		echo view('pages/add_data', $data);
	}

	public function report_form() {
		$data['title'] = "Report";

		echo view('pages/report', $data);
	}

	public function test() {
		$model = new Datasiswa_model();
		$data['data_siswa'] = $model->get_data_siswa()->getResult();
		$data['agama'] = $model->get_agama()->getResult();
		return view('pages/test', $data);
	}
}
