<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Datasiswa_model;

class Front extends BaseController {
	// render dashboard
	public function index() {
		$data['title'] = "Dashboard - SMAN 01 Surakarta";
		
		echo view('index', $data);
	}

	// render registrasi
	public function register_form() {
		$model = new Datasiswa_model();
		$data = array(
			'title' => 'Tambah Data Siswa - SMAN 01 Surakarta',
			'agama' => $model->get_agama()->getResult()
		);

		echo view('pages/add_data', $data);
	}

	// render crud_table
	public function table_siswa() {
		$data['title'] = "Tabel Data Siswa - SMAN 01 Surakarta";
		
		$model = new Datasiswa_model();
		$data['data_siswa'] = $model->get_data_siswa()->getResult();
		$data['gender'] = $model->get_gender()->getResult();
		$data['agama'] = $model->get_agama()->getResult();
		echo view('pages/edit_data', $data);
	}

	// render report_pdf
	public function report_form() {
		$model = new Datasiswa_model();
		$data = array(
			'title' => 'Cetak Laporan - SMAN 01 Surakarta',
			'data_siswa' => $model->get_data_siswa()->getResult(),
			'gender' => $model->get_gender()->getResult(),
			'agama' => $model->get_agama()->getResult()
		);

		echo view('pages/report', $data);
	}

	// save function for registrasi
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
            'nama_agama' => $this->request->getPost('agama')
		);

		$model->simpan_data_siswa($data);
		return redirect()->to('/registrasi');
	}

	// update function for crud
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
		return redirect()->to('/tabel-siswa');
	}

	// delete function for crud
	public function delete() {
		$model = new Datasiswa_model();
		$id = $this->request->getPost('nisn_siswa');

        $model->hapus_data_siswa($id);
        return redirect()->to('/tabel-siswa');
	}

	// pdf render function
	public function generate_pdf() {
		$model = new Datasiswa_model();
		$data = $model->get_data_siswa();
        $table ='';
        foreach ($data->getResult('array') as $row) {           
			$table .='<tr>
                        <td>'.$row['nisn'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['tempat_lahir'].', '.$row['tanggal_lahir'].'</td>
                        <td>'.$row['asal_sekolah'].'</td>
                        <td>'.$row['alamat'].'</td>
                        <td>'.$row['nama_gender'].'</td>                             
                        <td>'.$row['nama_agama'].'</td>                             
                    </tr>';
		}
		// $ambil = base_url('assets/css/style.css');
		// $ambil2 = file_get_contents($ambil);
        $mpdf = new \Mpdf\Mpdf([
			'debug'=>FALSE,
			'mode' => 'utf-8',
			'orientation' => 'L'
		]);
		// $stylesheet = ROOTPATH'../../public/assets/css/style.css';
        $mpdf->WriteHTML(
		'<table border="1" class="table table-striped" style="border-collapse: collapse;">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama Siswa</th>
					<th>Tempat/Tanggal Lahir</th>
					<th>Asal Sekolah</th>
					<th>Alamat Tinggal</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
				</tr>
			</thead>
        	<tbody>
				'.$table.'
			</tbody>
		</table>'
		);
			$mpdf->Output('data_siswa.pdf','I');
        exit;
	}

	public function test() {
		$model = new Datasiswa_model();
		$data = array(
			'title' => 'Test Laporan',
			'data_siswa' => $model->get_data_siswa()->getResult(),
			'gender' => $model->get_gender()->getResult(),
			'agama' => $model->get_agama()->getResult()
		);

		echo view('pages/test', $data);
	}

	public function cetak() {
		$mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello</h1>');
		$mpdf->Output('data_siswa.pdf','I');
		exit;
        return redirect()->to('/test');
	}
	public function test01() {
		// $model = new Datasiswa_model();
		// $data = $model->get_data_siswa();
        // $table ='';
        // foreach ($data->getResult('array') as $row) {           
		// 	$table .='<tr>
        //                 <td>'.$row['nisn'].'</td>
        //                 <td>'.$row['nama'].'</td>
        //                 <td>'.$row['tempat_lahir'].', '.$row['tanggal_lahir'].'</td>
        //                 <td>'.$row['asal_sekolah'].'</td>
        //                 <td>'.$row['alamat'].'</td>
        //                 <td>'.$row['nama_gender'].'</td>                             
        //                 <td>'.$row['nama_agama'].'</td>                             
        //             </tr>';
		// }
		
        // // $pdf = new Pdf([
		// // 	// set to use core fonts only
		// // 	'mode' => Pdf::MODE_CORE, 
		// // 	// A4 paper format
		// // 	'format' => Pdf::FORMAT_A4, 
		// // 	// portrait orientation
		// // 	'orientation' => Pdf::ORIENT_PORTRAIT, 
		// // 	// stream to browser inline
		// // 	'destination' => Pdf::DEST_BROWSER, 
		// // 	// your html content input
		// // 	'content' => $this->renderPartial('pages/report'),  
		// // 	// format content from your own css file if needed or use the
		// // 	// enhanced bootstrap css built by Krajee for mPDF formatting 
		// // 	'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
		// // 	// any css to be embedded if required
		// // 	'cssInline' => '.kv-heading-1{font-size:18px}', 
		// // 	 // set mPDF properties on the fly
		// // 	'options' => ['title' => 'Krajee Report Title'],
		// // 	 // call mPDF methods on the fly
		// // 	'methods' => [ 
		// // 		'SetTitle' => 'Laporan Data Siswa - SMAN 01 Surakarta',
		// // 		'SetHeader'=>['Krajee Report Header'], 
		// // 		'SetFooter'=>['{PAGENO}']]
		// // ]);
		// $mpdf = new \Mpdf\Mpdf([
		// 	'debug'=>FALSE,
		// 	'mode' => 'utf-8',
		// 	'orientation' => 'L'
		// ]);
		// $mpdf->SetHeader('Laporan Data Siswa Baru|SMAN 01 Surakarta|{PAGENO}');
        // $mpdf->WriteHTML(
		// '<table border="1" class="table table-striped" style="border-collapse: collapse;">
		// 	<thead>
		// 		<tr>
		// 			<th>NISN</th>
		// 			<th>Nama Siswa</th>
		// 			<th>Tempat/Tanggal Lahir</th>
		// 			<th>Asal Sekolah</th>
		// 			<th>Alamat Tinggal</th>
		// 			<th>Jenis Kelamin</th>
		// 			<th>Agama</th>
		// 		</tr>
		// 	</thead>
        // 	<tbody>
		// 		'.$table.'
		// 	</tbody>
		// </table>'
		// );
		// exit;
			// $mpdf->Output('data_siswa.pdf','I');
			// return redirect()->to('/cetak-laporan');
			// $model = new Datasiswa_model();
			// $data = $model->get_data_siswa();
			// $table ='';
			// foreach ($data->getResult('array') as $row) {           
			// 	$table .='<tr>
			// 				<td>'.$row['nisn'].'</td>
			// 				<td>'.$row['nama'].'</td>
			// 				<td>'.$row['tempat_lahir'].', '.$row['tanggal_lahir'].'</td>
			// 				<td>'.$row['asal_sekolah'].'</td>
			// 				<td>'.$row['alamat'].'</td>
			// 				<td>'.$row['nama_gender'].'</td>                             
			// 				<td>'.$row['nama_agama'].'</td>                             
			// 			</tr>';
			// }
			// // $ambil = base_url('assets/css/style.css');
			// // $ambil2 = file_get_contents($ambil);
			// $mpdf = new \Mpdf\Mpdf([
			// 	'debug'=>FALSE,
			// 	'mode' => 'utf-8',
			// 	'orientation' => 'L'
			// ]);
			// // $mpdf->SetHeader('Laporan Data Siswa Baru|SMAN 01 Surakarta|{PAGENO}');
			// // $stylesheet = ROOTPATH.'public/assets/css/style.css';
			// $html = '<br><br>
			// <table border="1" class="table table-striped" style="border-collapse: collapse; width: 100%;">
			// 	<thead>
			// 		<tr>
			// 			<th style="width: 10%;">NISN</th>
			// 			<th style="width: 15%;">Nama Siswa</th>
			// 			<th style="width: 20%;">Tempat/Tanggal Lahir</th>
			// 			<th style="width: 15%;">Asal Sekolah</th>
			// 			<th style="width: 10%;">Alamat Tinggal</th>
			// 			<th style="width: 10%;">Jenis Kelamin</th>
			// 			<th style="width: 10%;">Agama</th>
			// 		</tr>
			// 	</thead>
			// 	<tbody>
			// 		'.$table.'
			// 	</tbody>
			// </table>'

			// // $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
			// // $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
			// $mpdf->Output('data_siswa.pdf','I');
		
			// exit;
	}
}
