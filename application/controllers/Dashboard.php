<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
       
        $this->load->model('MainModel');
		$this->load->library('session');
		$this->nik = $this->session->userdata('id');
		$this->id_akses = $this->session->userdata('id_akses');
		// $this->userdekrip = $this->dekrip($this->username);
		if ($this->nik == NULL ) {
			redirect('Auth/unauthorized','refresh', 401);
		}

	}


		public function index()
	{

		//jika user karyawan
		$data['biodata'] = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
		$data['akses'] = $this->MainModel->getDataTable('tb_akses');
		
		// $getcampus = $this->MainModel->getBranch($this->kodecabang ,'namacabang');
		// $data['campus'] = $getcampus;
		// $data['log_statistik'] = $this->MainModel->getStatisticLogin($this->nik);
		
		// config of page
		$data['content_file'] = 'content/dashboard.php';
		$data['content_css'] = 'content/css/dahsboard.php';
		$data['content_js'] = 'content/js/dashboard.php';
		$data['content_title'] = 'Dashboard';
		
		$this->load->view('template/index.php', $data);
	}


	public function dekrip($data){
		return $this->encryption->decrypt($data);
	}
	
}
