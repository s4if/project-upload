<?php namespace App\Controllers;

class Upload extends BaseController
{
	protected $session;
	function __construct()
	{
		$this->session = session();
		$this->session->start();
	}

	public function form()
	{
		$alertMessage = $this->getAlert($this->session->getFlashData('alert'));
		return view("upload/upload", ['url' => base_url(), 'alert_messages' => $alertMessage]);
	
	}
	public function upload()
	{
		$storedPassword = "UjiCoba"; // nanti diganti pakai sql
		$password = $this->request->getPost('pass_upload');
		if ($storedPassword == $password) {
			$this->doUpload();
		} else {
			$this->session->setFlashdata('alert', ['message' => "Maaf, Password Salah!", 'type' => "warning"]);
		}
		return redirect()->to("/upload/form");
	}
	private function doUpload(){
		$namaTugas = "Tugas_Coba_1"; //dari SQL sesuai password upload
		$pelajaran = "Administrasi Sistem Jaringan";
		$idPelajaran = "asj"; //nanti pakai sql + php filesystem?
		$kelas = "xi-tkj-1"; //dari sql sesuai passsword upload
		$file = $this->request->getFile('file_upload');
		if ($file->isValid()){
			$nama = $this->request->getPost("nama");
			$jenisTugas = $this->request->getPost("jenis_tugas");
			$filename = '['.$namaTugas.']-['.$kelas.']-['.str_replace(" ", "_", $nama).'].'.$file->getExtension();
			try {
				$newFile = $file->move(WRITEPATH.'uploads/'.$idPelajaran, $filename);
				$this->session->setFlashdata('alert', ['message' => "Upload Berhasil", 'type' => "success"]);
			} catch (HTTPException $e) {
				//echo "Gagal HTTPException";
				$this->session->setFlashdata('alert', ['message' => "Maaf, upload gagal.", 'type' => "warning"]);
			}
		}
		else {
			$this->session->setFlashdata('alert', ['message' => "Maaf, upload gagal.", 'type' => "danger"]);
		}
	}
	public function sql()
	{
		$db = db_connect();
		return "konek?";
	}

}
