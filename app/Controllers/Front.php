<?php namespace App\Controllers;

class Front extends BaseController {
	public function index() {
		$data['title'] = "Dashboard";

		echo view('index', $data);
	}

	public function edit_form() {
		return view('pages/edit_data');
	}

	public function add_form() {
		return view('pages/add_data');
	}

	public function show_form() {
		return view('pages/show_data');
	}

	public function report_form() {
		return view('pages/report');
	}

}
