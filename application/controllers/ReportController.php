<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {


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


		public function Staff()
	{
		//jika user karyawan
		$data['biodata'] = $this->MainModel->gettable(array('id' => $this->nik),'tb_user_detail');
		$data['akses'] = $this->MainModel->getDataTable('tb_akses');
		// if($this->id_akses == 2){
		// 	$data['content_file'] = 'content/Form_Staff.php';	
		// }elseif($this->id_akses == 3){
		// 	$data['form_managerial'] = $this->MainModel->getform(array('akses_id' => $this->id_akses));
		// 	$data['form_personal'] = $this->MainModel->getformpersonal(array('akses_id' => $this->id_akses));
		// 	$data['form_corporate'] = $this->MainModel->getformcorporate(array('akses_id' => $this->id_akses));
		// 	$data['form_absense'] = $this->MainModel->getformabsense(array('akses_id' => $this->id_akses));
		// }
		// config of page
		$data['content_file'] = 'content/ReportViewStaff.php';	
		$data['content_css'] = 'content/css/form_css.php';
		$data['content_js'] = 'content/js/form_js.php';
		$data['content_title'] = 'Form';
		
		$this->load->view('template/index.php', $data);
	}

	public function Middle()
	{
		//jika user karyawan
		$data['biodata'] = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
		$data['manager'] = $this->MainModel->getDataTable('tb_hasil_form_manager_header');
		$data['personal'] = $this->MainModel->getDataTable('tb_hasil_form_personal_header');
		$data['absense'] = $this->MainModel->getDataTable('tb_hasil_form_absense_header');
		$data['corporate'] = $this->MainModel->getDataTable('tb_hasil_form_corporate_header');
		

		// config of page
		$data['content_file'] = 'content/ReportViewMiddle.php';	
		$data['content_css'] = 'content/css/form_css.php';
		$data['content_js'] = 'content/js/form_js.php';
		$data['content_title'] = 'Form';
		
		$this->load->view('template/index.php', $data);
	}


	public function dekrip($data){
		return $this->encryption->decrypt($data);
	}
	
}
