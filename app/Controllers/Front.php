<?php namespace App\Controllers;

class Front extends BaseController {
	public function index() {
		$data['title'] = "Dashboard";

		echo view('index', $data);
	}

	public function edit_form() {
		$data['title'] = "Edit Data Siswa";

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
		return view('pages/test');
	}
}
