<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	/**
	 * @author Firmansyah <vhivirmansyah@gmail.com>
	 * @var $username
	 */
	
	private $username;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
				// Encripty
		$this->nik = $this->session->userdata('nik');
		// Decripty
	
		if ($this->nik == NULL) {

			redirect('auth/unauthorized', 'refresh', 401);
		}
        $this->load->model('MainModel', "", true);
	}
	
	/**
	 * [getBio description]
	 * @return [type] [description]
	 */
	public function getBio()
	{
		return 'test';
	}

	public function dekrip($data){
		return $this->encryption->decrypt($data);
	}

	/**
	 * [profile description]
	 * @return [type] [description]
	 */
	public function profile()
	{
		// collecting data
		$getdosen = $this->MainModel->gettable($this->nik,'dosen','kodedosen');
		$getkaryawan = $this->MainModel->gettable($this->nik,'profilkaryawan','nik');

		// jika session nik sama dengan table dosen(kodedosen)
		if($this->nik ==  $getdosen['kodedosen']){

				//jika user dosen
				$data['biodata'] = $this->MainModel->getBio($this->nik,'kodedosen','kodedosen','dosen');
				// file content 
				$data['content_file'] = 'content/profil.php';
				// untuk pengecekan user di header
				$data['cek'] = $this->MainModel->gettable($this->nik,'dosen','kodedosen');
				$data['cekfoto'] = $this->MainModel->gettable($this->nik,'profilkaryawan','nik');
				

		// jika session nik sama dengan table profilkaryawan(nik)
		}elseif($this->nik ==  $getkaryawan['nik']){

				//jika user karyawan
				$data['biodata'] = $this->MainModel->getBio($this->nik,'nik','nik','profilkaryawan');
				// file content 
				$data['content_file'] = 'content/profil_karywan.php';
				// untuk pengecekan user di header
				$data['cek'] = $this->MainModel->gettable($this->nik,'dosen','kodedosen');
				$data['cekfoto'] = $this->MainModel->gettable($this->nik,'profilkaryawan','nik');
		}
		$data['log_statistik'] = $this->MainModel->getStatisticLogin($this->nik);
		// config of page
		$data['content_css'] = 'content/css/profil.php';
		$data['content_js'] = 'content/js/profil.php';
		$data['content_title'] = 'Profile Settings';
		
		$this->load->view('template/index.php', $data);
	}

	/**
	 * [save description]
	 * @return [type] [description]
	 */
	public function save()
	{
		$id = $this->nik;
		$data = $this->input->post('profil');
		if (! empty($_FILES['photo'])) {
			// config of upload libraries
			$upload['upload_path']          = './assets/fotodosen';
	        $upload['allowed_types']        = 'png|jpg|jpeg|gif';
	        $upload['max_size']             = 10000;
	        $upload['file_name']            = $this->nik;
	        $upload['overwrite']            = true;
	        // start initialize libraries
	        $this->upload->initialize($upload);
	        if ($this->upload->do_upload('photo')) {
	        	$data['fotodosen'] = 'fotodosen/' . $this->upload->data('file_name');
	        }

	        // {
	        //     $this->session->set_flashdata('message', $this->upload->display_errors());

	        //     redirect('kotak_file_tugas', 'refresh');
	        // }
	        // else
	        // {
			// config of ftp libraries
			// $ftp['hostname']        = 'https://direktorat.politekniklp3i-jkt.ac.id/AdminDirektorat/fotodosen/';
	  //       $ftp['username']        = 'png|jpeg|gif|jpg';
	  //       $ftp['password']        = 5000;
	  //       $ftp['debug']			= true;
	  //       // start connect remote server
	  //       $this->ftp->connect($ftp);
	  //       // local temporary path, server remote path
	  //       $this->ftp->upload($_FILES['photo']['temp_name'], 'AdminDirektorat/fotodosen/' . $this->nik . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
	  //       die();
		}
		$updateBio = $this->MainModel->updateBio($data, $id);
		if ($updateBio == true) {
			$this->session->set_flashdata('message', 'Data successfully updated.');
		}
		else {
			$this->session->set_flashdata('message', 'There are no update, please check your input');
		}
		
		redirect('user/profile', 'refresh');
	}

	/**
	 * [updatePassword description]
	 * @return [type] [description]
	 */
	public function updatePassword()
	{
		$value = $this->input->post('password');
		$getCredentials = $this->MainModel->getCredentials($this->nik);
		if ($getCredentials['password'] != $value['current_pass']){
			$this->session->set_flashdata('message', 'Can\'t change the password. Password invalid.');
		}
		else {
			$update = $this->MainModel->newPassword($this->nik, $value['password']);

			if ($update){
				$this->session->set_flashdata('message', 'Password has been change');
			}
			else {
				$this->session->set_flashdata('message', 'Password can\'t be change, please check your input.');
			}
		}

		redirect('user/profile', 'refresh');
	}

	/**
	 * [profile_other description]
	 * @return [type] [description]
	 */
	public function profile_other()
	{
		// collecting data
		$data['biodata'] = $this->MainModel->getBio($this->nik);
		$data['log_statistik'] = $this->MainModel->getStatisticLogin($this->nik);
		$data['branch'] = $this->MainModel->getBranch(null, array('kodecabang','namacabang'));
		$data['lecturer'] = $this->MainModel->getBio(null, 'namadosen');
		// config of page
		$data['content_file'] = 'content/profil_teman.php';
		$data['content_css'] = 'content/css/profil_teman.php';
		$data['content_js'] = 'content/js/profil_teman.php';
		$data['content_title'] = 'Friends Profile';
		
		$this->load->view('template/index.php', $data);
	}

	// /**
	//  * [find description]
	//  * @return [type] [description]
	//  */
	// public function find()
	// {
	// 	$input = $this->input->post('cari');
	// 	$values = (empty($input)) ? NULL : $input;
	// 	$view = '<div class="layer-dynamic">';
	// 	if ($values == NULL){
	// 		$view .= '<h2>Maaf, tidak ada data yang ditampilkan</h2>';
	// 	}
	// 	else {
	// 		$param = array(
	// 			'kode' => $values['jurusan'],
	// 			'kodecabang' => $values['kampus'],
	// 			'status' => 'Aktif',
	// 			);
	// 		$finding = $this->MainModel->findingUser($param, 'nama_mahasiswa', 'multiple');
	// 		$view .='<table class="table table-striped table-bordered table-hover" id="sample_1">
	// 	           	    <thead>
	// 	           	        <tr>
	// 	           	            <th> No </th>
	// 	           	            <th> NIM </th>
	// 	           	            <th> Nama Lengkap </th>
	// 	           	            <th> Kelas </th>
	// 	           	            <th> # </th>
	// 	           	        </tr>
	// 	           	    </thead>';
	//         $view .= '<tbody>' ;
	//         $i = 1 ;
	//         foreach ($finding as $key => $value) {
	//         	$view .= '<tr>
	//             	            <td>' . $i++ . '</td>
	//             	            <td>' . $value['nim'] . '</td>
	//             	            <td>' . $value['Nama_Mahasiswa'] . '</td>
	//             	            <td>' . $value['kelas'] . '</td>
	//             	            <td><a href="#modal" data-toggle="modal" id="detail-' . $value['nim'] .  '" class="btn btn-outline dark pull-right detail-btn">Lihat Lengkap</a></td>
	//            			</tr>';
	//         }
	            	        
	//         $view .= '</tbody></table>';
	// 	}

	// 	$view .= '</div>';

	// 	echo $view;
	// }

	/**
	 * [findOneUser description]
	 * @return [type] [description]
	 */
	public function findOneUser()
	{
		$input = explode("-", $this->uri->segment(4));
		if (is_array($input) == false){
			$view = '<div class="modal-layer flip-scroll"><h2>Sorry, there are no data can be shown</h2></div>';
		}
		else {
			$param = array(
				'kode' => $input[1]
				);
			$finding = $this->MainModel->getBio($input[1]);
			$birthday = explode("-", $finding['tanggallahir']);
			if ($birthday[0] != 0000 && $birthday[1] != 00) {
				$birthdayValid = $birthday[2] . ' ' . monthIndo($birthday[1]) . ' ' . $birthday[0];
			}
			else {
				$birthdayValid = $finding['tanggallahir'];
			}
			// var_export($finding);die();
			// foreach ($finding as $value) {
				$view = '<div class="modal-layer flip-scroll"><div class="row"><div class="col-md-12">
						<div class="col-md-4">';
				if ($finding['fotodosen'] == '' OR is_null($finding['fotodosen'])){
					$view .= '<img alt="" class="img-circle" src="'.ROOT_URL.'/assets/images/user.jpg" width="206" height="258" />';	
				}
				else {
					$image = 'https://manajemen.lp3i.ac.id/AdminPendidikan/timthumb.php?src='.$finding['fotodosen'].'&w=218&h=235&zc=1';
					if (!getimagesize($image)) {
			            $image = ROOT_URL."/assets/".$finding['fotodosen'];
			        }
					$view .= '<img alt="" class="img-circle" src="'.$image.'" width="206" height="258" />';
				}

				$view .='</div>
						<div class="col-md-8">
						<table class="table table-bordered table-striped table-condensed flip-content">';
				$view .= '<tr>
								<td width="25%"> LECTURERS ID</td>
								<td>'.$finding['kodedosen'].'</td>
							</tr>';
				$view .= '<tr>
								<td> FULL NAME</td>
								<td>'.$finding['namadosen'].'</td>
							</tr>';
				$view .= '<tr>
								<td> PLACE, DATE OF BIRTH</td>
								<td>'.$finding['tempatlahir'].', '. $birthdayValid .'</td>
							</tr>';
				// $gender = ($finding['jk'] == 1) ? 'Laki-laki' : 'Perempuan';
				// $view .= '<tr>
				// 				<td> GENDER</td>
				// 				<td>'. $gender .'</td>
				// 			</tr>';
				$view .= '<tr>
								<td> ADDRESS</td>
								<td>'.$finding['alamat_rumah'].'</td>
							</tr>';
				$view .= '<tr>
								<td> EMAIL</td>
								<td>'.$finding['email'].'</td>
							</tr>';
			// }

			$view .= '</table>
						</div></div>
					  </div></div>
					  ';
		}

		echo $view;
	}

	/**
	 * [concentrationBy description]
	 * @return [type] [description]
	 */
	public function concentrationBy()
	{
		$input = $this->input->post('id');
		$values = (empty($input)) ? NULL :$input;
		if ($values == NULL){

		}
		else {
			$finding = $this->MainModel->getConcentrationBy(array('kodecabang' => $values), array('kode','jurusan'));
		}
		
		echo json_encode($finding);
	}

	/**
	 * [detailSave description]
	 * @return [type] [description]
	 */
	public function detailSave()
	{
		$input = $this->input->post('detail');
		$input['nim'] = $this->session->userdata('username');
		$input['kodecabang'] = $this->session->userdata('kodecabang');
		$ifExistsDetail = $this->MainModel->getBioDetail(array('nim' => $this->nik, 'kodecabang' => $input['kodecabang']));
		if (COUNT($ifExistsDetail) == 0) {
			$saveBioDetail = $this->MainModel->saveBioDetail($input, 'insert');
		}
		else {
			$saveBioDetail = $this->MainModel->saveBioDetail($input, 'update');
		}
		if ($saveBioDetail) {
			$this->session->set_userdata('bio_detail', true);
			$this->session->set_flashdata('message', 'Data successfully saved');
		}
		else {
			
			$this->session->set_flashdata('message', 'Data failed to save, please check your input');
		}

		redirect('user/profile#tab_1_2', 'refresh');
	}
}
