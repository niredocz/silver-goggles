<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Datasiswa_model;

class Front extends BaseController {
	public function index() {
		$data['title'] = "Dashboard";

		echo view('index', $data);
	}

	public function edit_form() {
		$data['title'] = "Edit Data Siswa";
		// $model = new Product_model();
        // $data = array(
        //     'product_name'        => $this->request->getPost('product_name'),
        //     'product_price'       => $this->request->getPost('product_price'),
        //     'product_category_id' => $this->request->getPost('product_category'),
        // );
        // $model->saveProduct($data);
		// return redirect()->to('/product');
		$model = new Datasiswa_model();
		$data['data_siswa'] = $model->get_data_siswa()->getResult();
		$data['agama'] = $model->get_agama()->getResult();
		echo view('pages/edit_data', $data);
	}

	public function add_form() {
		$data['title'] = "Tambah Data Siswa";

		echo view('pages/add_data', $data);
	}

	public function show_form() {
		$data['title'] = "Tampil Data Siswa";

		echo view('pages/show_data', $data);
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
