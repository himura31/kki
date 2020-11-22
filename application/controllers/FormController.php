<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {
	public function __construct(){
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

	public function index(){
		$data['akses'] = $this->MainModel->getDataTable('tb_akses');
		$id = $this->input->get('id');
		$data['biodata'] = $this->MainModel->gettable(array('id' => $this->nik),'tb_user_detail');

		if ($id) {
			$data_id = $this->MainModel->gettable(array('id' => $id),'tb_user');
			if($data_id['id_akses'] == 2){
				$data['content_file'] = 'content/Form_Staff.php';	
			}
			elseif($data_id['id_akses'] == 3){
				$data['form_managerial'] = $this->MainModel->getform(array('akses_id' => $data_id['id_akses']));
				$data['form_personal'] = $this->MainModel->getformpersonal(array('akses_id' => $data_id['id_akses']));
				$data['form_corporate'] = $this->MainModel->getformcorporate(array('akses_id' => $data_id['id_akses']));
				$data['form_absense'] = $this->MainModel->getformabsense(array('akses_id' => $data_id['id_akses']));

				$data['hasil_manager'] = $this->MainModel->getDataHasilManager(array('user_id' => $id), 'tb_hasil_form_manager_header');
				$data['hasil_personal'] = $this->MainModel->getDataHasilPersonal(array('user_id' => $id), 'tb_hasil_form_personal_header');
				$data['hasil_absense'] = $this->MainModel->getDataHasilAbsense(array('user_id' => $id), 'tb_hasil_form_absense_header');
				$data['hasil_corporate'] = $this->MainModel->getDataHasilCorporate(array('user_id' => $id), 'tb_hasil_form_corporate_header');

				$data['content_file'] = 'content/Form_Middel_Atasan.php';	
			}
		}
		else{
			if($this->id_akses == 2){
				$data['content_file'] = 'content/Form_Staff.php';	
			}
			elseif($this->id_akses == 3){
				$data['form_managerial'] = $this->MainModel->getform(array('akses_id' => $this->id_akses));
				$data['form_personal'] = $this->MainModel->getformpersonal(array('akses_id' => $this->id_akses));
				$data['form_corporate'] = $this->MainModel->getformcorporate(array('akses_id' => $this->id_akses));
				$data['form_absense'] = $this->MainModel->getformabsense(array('akses_id' => $this->id_akses));
				$data['content_file'] = 'content/FormView.php';	
			}
		}

		// config of page
			$data['content_css'] = 'content/css/form_css.php';
			$data['content_js'] = 'content/js/form_js.php';
			$data['content_title'] = 'Form';
		// config of page
		$this->load->view('template/index.php', $data);
	}

	public function Create_manager(){
		$id  = (int)$this->input->post('id');

		if ($id > 0) {
			// DATA
				$post_nilai  					= $this->input->post('manager_nilai');
				$id_detail  					= $this->input->post('id_detail');
				$data_detail["id"][] 			= $id_detail['id_detail1'];
				$data_detail["id"][] 			= $id_detail['id_detail2'];
				$data_detail["id"][] 			= $id_detail['id_detail3'];
				$data_detail["id"][] 			= $id_detail['id_detail4'];
				$data_detail["id"][] 			= $id_detail['id_detail5'];
				$data_detail["id"][] 			= $id_detail['id_detail6'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai1'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai2'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai3'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai4'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai5'];
				$data_detail["manager_nilai"][] = $post_nilai['manager_nilai6'];
			// DATA

			for ($i = 0; $i < count($data_detail['id']); $i++) {
			    $update = array('manager_nilai' => $data_detail['manager_nilai'][$i]);
			    $where = array('id' => $data_detail['id'][$i]);

				$this->db->where('id', $data_detail['id'][$i]);
				$this->db->update('tb_hasil_form_manager_detail', $update);
			}
		}
		else{
			$post_persen = $this->input->post('manager_persen');
			$post_score  = $this->input->post('manager_score');

			$biodata = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
			$nama_asli = $biodata['nama_depan'].' '.$biodata['nama_belakang'];

			$data_header = array(
				'user_id' => $this->nik,
				'nmkryawn' => $nama_asli,
				'tanggal_pengisiian' => date('Y-m-d'),
			);

			$tes = $this->MainModel->MaxId('tb_hasil_form_manager_header');
			$kodeBarang = $tes['kodeterbesar'];	
			$kodeBarang++;

			$data_detail = [
			    [
			        "id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen1'],
			        "manager_score"  => $post_score['manager_score1']
			    ],
			    [
			        "id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen2'],
			        "manager_score"  => $post_score['manager_score2']
			    ],
			    [
			    	"id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen3'],
			        "manager_score"  => $post_score['manager_score3']
			    ],
			    [
			    	"id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen4'],
			        "manager_score"  => $post_score['manager_score4']
			    ],
			    [
			    	"id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen5'],
			        "manager_score"  => $post_score['manager_score5']
			    ],
			    [
			    	"id_form_header" => $kodeBarang,
			        "manager_persen" => $post_persen['manager_persen6'],
			        "manager_score"  => $post_score['manager_score6']
			    ]
			];
			$this->MainModel->create_form_manager($data_detail,$data_header);		
		}
	}

	public function Create_personal(){
		$post_persen = $this->input->post('personal_persen');
		$post_score = $this->input->post('personal_score');
		$biodata = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
		$nama_asli = $biodata['nama_depan'].' '.$biodata['nama_belakang'];

		$data_header = array(
			'user_id' => $this->nik,
			'nmkryawn' => $nama_asli,
			'tanggal_pengisiian' => date('Y-m-d'),
		);

		$tes = $this->MainModel->MaxId('tb_hasil_form_personal_header');
		$kodeBarang = $tes['kodeterbesar'];	
		$kodeBarang++;
	
		$data_detail = [
		    [
		        "id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen1'],
		        "personal_score" => $post_score['personal_score1']
		    ],
		    [
		        "id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen2'],
		        "personal_score" => $post_score['personal_score2']
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen3'],
		        "personal_score" => $post_score['personal_score3']
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen4'],
		        "personal_score" => $post_score['personal_score4']
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen5'],
		        "personal_score" => $post_score['personal_score5']
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "personal_persen" => $post_persen['personal_persen6'],
		        "personal_score" => $post_score['personal_score6']
		    ]
		];
		$this->MainModel->create_form_personal($data_detail,$data_header);
	}

	public function Create_absense(){
		$post_persen = $this->input->post('absense_persen');
		$biodata = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
		$nama_asli = $biodata['nama_depan'].' '.$biodata['nama_belakang'];

		$data_header = array(
			'user_id' => $this->nik,
			'nmkryawn' => $nama_asli,
			'tanggal_pengisiian' => date('Y-m-d'),
		);

		$tes = $this->MainModel->MaxId('tb_hasil_form_absense_header');
		$kodeBarang = $tes['kodeterbesar'];	
		$kodeBarang++;
	
		$data_detail = [
		    [
		        "id_form_header" => $kodeBarang,
		        "absense_nilai_sendiri" => $post_persen['personal_persen1'],
		    ]
		];
		$this->MainModel->create_form_absense($data_detail,$data_header);
	}

	public function Create_corporate(){
		$post_persen = $this->input->post('corporate_nilai');
		$biodata = $this->MainModel->gettable($this->nik,'tb_user_detail','user_id');
		$nama_asli = $biodata['nama_depan'].' '.$biodata['nama_belakang'];

		$data_header = array(
			'user_id' => $this->nik,
			'nmkryawn' => $nama_asli,
			'tanggal_pengisiian' => date('Y-m-d'),
		);

		$tes = $this->MainModel->MaxId('tb_hasil_form_corporate_header');
		$kodeBarang = $tes['kodeterbesar'];	
		$kodeBarang++;

	
		$data_detail = [
		    [
		        "id_form_header" => $kodeBarang,
		        "corporate_nilai_sendiri" => $post_persen['corporate_persen1'],
		    ],
		    [
		        "id_form_header" => $kodeBarang,
		        "corporate_nilai_sendiri" => $post_persen['corporate_persen2'],
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "corporate_nilai_sendiri" => $post_persen['corporate_persen3'],
		    ],
		    [
		    	"id_form_header" => $kodeBarang,
		        "corporate_nilai_sendiri" => $post_persen['corporate_persen4'],
		    ]
		];
		$this->MainModel->create_form_corporate($data_detail,$data_header);
	}

	public function dekrip($data){
		return $this->encryption->decrypt($data);
	}
	
}
