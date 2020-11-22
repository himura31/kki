<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/Facebook/autoload.php';
require_once ROOT_DIR . '/vendor/autoload.php';

class Auth extends CI_Controller {
	/**
	 * @author 	Firmansyah <vhivirmansyah@gmail.com>
	 * @var 	PAGE_NAME
	 * @var 	$fbID
	 * @var 	$fbSecret
	 */
	const PAGE_NAME = 'MASUK';
	protected $fbID = '357828324549661';
    protected $fbSecret = '71215ea1fd1db32828049289c7ee7019';
    protected $googleID = '341228138411-ageok4552b375mjbhsiutqmhu9gsg08r.apps.googleusercontent.com';
    protected $googleSecret = 'oIG2bZBvQCb-hN3rNxkQQMSu';
	
	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
		// load a session libraries
		// $this->load->library('session');
		// $this->load->library('encryption');
		// load a model
        $this->load->model('MainModel', "", true);
	}
	
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		$data['content_title'] = 'Login';
		// $data['facebook_url'] = $this->OauthFacebook();
		// $data['google_url'] = $this->OauthGoogle();

		$this->load->view('template/login.php', $data);
	}

	/**
	 * [doAuth description]
	 * @return [type] [description]
	 */
	public function doAuth()
	{
		$credentials = $this->input->post('credentials');
		$processAuth = $this->MainModel->processAuth($credentials);
		// var_export($processAuth);die();
		
		if ($processAuth != NULL){
				
				// Encrpty data user
				// $dataenkrip = $this->enkrip($processAuth);
				// create session from data user encrypt
				$data = $this->makeSession($processAuth);
				// print_r($data);
				
				// check, create of update statistic login
				// $this->countStatistic();
				// create log of user
				// $this->userLog();


				// redirect to main page
				redirect('Dashboard','refresh');

				}
		else{
			$this->session->set_flashdata('input', $credentials['user']);
			$this->session->set_flashdata('message', 'Otentikasi gagal, silakan periksa data User ID dan Sandi anda');

  			redirect('/', 'refresh'); 
	}
}

	// public function enkrip($user_data)
	// {
	// 	foreach ($user_data as $key) {
	// 		$data['nik'] = $this->encryption->encrypt($key['nik']);
	// 		$data['username'] = $this->encryption->encrypt($key['username']);
	// 		$data['password'] = $this->encryption->encrypt($key['password']);
	// 		$data['kodecabang'] = $this->encryption->encrypt($key['kodecabang']);
	// 		$data['email'] = $this->encryption->encrypt($key['email']);
	// 	}
	// 	return $data;
	// }
	// public function dekrip($data){
	// 	return $this->encryption->decrypt($data);
	// }

	/**
	 * [makeSession description]
	 * @param  [type] $user_data [description]
	 * @return [type]            [description]
	 */
	public function makeSession($data)
	{	
			foreach ($data as $value) {
				
				$this->session->set_userdata('id' , $value['id']);
				$this->session->set_userdata('id_akses' , $value['id_akses']);
				$this->session->set_userdata('user' , $value['username']);
			}
		
	}

	/**
	 * [countStatistic description]
	 * @return [type] [description]
	 */
	// public function countStatistic()
	// {
	// 	// Decripty
	// 	$username = $this->session->userdata('nik');
	// 	// End Decript
	// 	// $userkrip = $this->dekrip($username);
	// 	$statisticlogin = $this->MainModel->getStatisticLogin($username);
	// 	if ($statisticlogin != null && count($statisticlogin) != 0){
	// 		$updateStatistic = $this->MainModel->setStatisticLogin($statisticlogin, 'update');
	// 	}
	// 	else {
	// 		$insertStatistic = $this->MainModel->setStatisticLogin($statisticlogin, 'insert',$username);
	// 	}
	// }

	/**
	 * [userLog description]
	 * @return [type] [description]
	 */
	// public function userLog()
	// {	
	// 	// Decripty 
	// 	$username = $this->session->userdata('nik');
	// 	$kodecabang = $this->session->userdata('kodecabang');
	// 	// $userkrip = $this->dekrip($username);
	// 	// $kodecabkrip = $this->dekrip($kodecabang);
	// 	// End Decript

	// 	$dateIndo = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	// 	$currentDay = date('w');
	// 	$request['userid'] = $username;
	// 	$request['kodecabang'] = $kodecabang;
	// 	$request['ipaddress'] = $_SERVER['REMOTE_ADDR'];
	// 	$request['namakomputer'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	// 	$request['browser'] = $_SERVER['HTTP_USER_AGENT'];
	// 	$request['situsreferensi'] = $_SERVER['SERVER_NAME'];
	// 	$request['tanggal'] = date('r');
	// 	// $request['nama'] = $this->session->userdata('name');
	// 	$this->MainModel->createUserLog($request);
	// }

	/**
	 * [unauthorized description]
	 * @return [type] [description]
	 */
	public function unauthorized()
	{
		$data['heading'] = '401 - Unauthorized';
		$data['message'] = 'Permintaan membutuhkan otentikasi. Silakan <a href="'.site_url('/').'">masuk</a> dengan menggunakan <b>User ID</b> dan <b>password</b> yang telah dimiliki';
		$this->session->sess_destroy();
		$this->load->view('errors/html/error_401.php', $data);
	}


		public function waktu()
	{
		
		$this->session->sess_destroy();
		$this->load->view('template/modal_logout.php');
	}

	/**
	 * [notFound description]
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function notFound($value='')
	{
		$data['heading'] = '404 - Page Not Found';
		$data['message'] = 'Halaman tidak ditemukan. <a href=javascript:window.history.go(-1);>Kembali</a>';
		$this->load->view('errors/html/error_404.php', $data);
	}

	/**
	 * [logout description]
	 * @return [type] [description]
	 */
	public function logout()
	{
		if (isset($_SESSION['facebook_access_token'])) {
			$facebook = new Facebook\Facebook(array(
	          'app_id'  => $this->fbID,
	          'app_secret' => $this->fbSecret
	        ));
			$helper = $facebook->getRedirectLoginHelper();
        	$logoutUrl = $helper->getLogoutUrl($_SESSION['facebook_access_token'], 'http://dumi.lp3i.ac.id/smartlecturer/');

			$this->session->sess_destroy();
        	
        	redirect($logoutUrl);
		}
		else if (isset($_SESSION['google_access_token'])) {
			$client = new Google_Client();
			$client->setApplicationName("Smart Student OAuth");
			$client->setClientId($this->googleID);
			$client->setClientSecret($this->googleSecret);
			$client->revokeToken($_SESSION['google_access_token']);
			$this->session->sess_destroy();

			redirect('https://mail.google.com/mail/u/0/?logout&hl=en', 'refresh');
		}
		else {
			// buat modal
			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}
	}

	/**
	 * [verifySignup description]
	 * @return [type] [description]
	 */
	public function verifySignup()
	{
		$data['kodedosen'] = $this->input->post('id');
		$data['tanggallahir'] = $this->input->post('birth');
		$verify = $this->MainModel->verifyAccount($data);

		echo $verify;
	}

	/**
	 * [signup description]
	 * @return [type] [description]
	 */
	public function signup()
	{
		$input = $this->input->post('signup');
		$saving = $this->MainModel->saveSignup($input);

		if ($saving == true){
			$this->session->set_flashdata('message', 'Selamat, anda telah berhasil melakukan aktifasi pada Smart Lecturer Politeknik LP3I Jakarta.');
		}
		else {
			$this->session->set_flashdata('message', 'Maaf, pendaftaran gagal. silakan ulangi langkah-langkah aktifasi dengan data yang valid');
		}

		redirect('/', 'refresh');
	}

	/**
	 * [forget description]
	 * @return [type] [description]
	 */
	public function forget()
	{
		$input = $this->input->post('userid');
		$getdosen = $this->MainModel->gettable($input,'dosen','kodedosen');
		$getkaryawan = $this->MainModel->gettable($input,'profilkaryawan','nik');
		$credentials = $this->MainModel->getCredentials($input);

			if (!empty($credentials)){
				if($input ==  $getdosen['kodedosen']){
					$getBio = $this->MainModel->getBio($input,'kodedosen','kodedosen','dosen');
					$namauser = $getBio['namadosen'];
				}elseif($input ==  $getkaryawan['nik']){
					$getBio = $this->MainModel->getBio($input,'nik','nik','profilkaryawan');
					$namauser = $getBio['nama'];
				}
				if (empty($getBio['email'])){
					$this->session->set_flashdata('message', 'Maaf, alamat email pada USER ID '.$input.' tidak ada. Silakan hubungi bagian pendidikan kampus');

					 redirect('/', 'refresh');
				}
				$email= explode(',', $getBio['email']);
				$validateEmail = strtolower(filter_var($email[0], FILTER_SANITIZE_EMAIL));
				
				// config of page mail
				$data['subject'] = 'Reset Sandi Smart Lecturer';
				$data['announcement'] = 'Reset Sandi';
				$data['name'] = $namauser;
				$data['message'] = 'Email ini adalah otomatis konfirmasi dari Sistem Smart Lecturer<br>
									Berikut adalah user Smart Lecturer anda.
									<br><hr>
									User Login	: <b>'.$credentials['username'].'</b><br>
									Sandi	: <b>'.$credentials['password'].'</b><hr>';
				$data['email_signature'] = EMAIL_SIGNATURE;
				$data['appellation'] = 'Bapak/Ibu';

				$view = $this->load->view('template/email' , $data, true);

				$sendEmail = $this->sendEmail($validateEmail, $view, $data['subject']);
				
				if ($sendEmail){
					$this->session->set_flashdata('message', 'Informasi Sandi telah berhasil terkirim pada alamat email: '.$validateEmail);

					redirect('/', 'refresh');
				}
				else {
					$this->session->set_flashdata('message', 'Maaf, Informasi Sandi gagal terkirim dengan alamat email: '.$email);

					redirect('/', 'refresh');
				}
			}
			else {
				$this->session->set_flashdata('message', 'Maaf, NIM '.$input.' tidak terdaftar');
				$this->logout();
				
				redirect('/', 'refresh');
			}
	}

	/**
	 * [OauthFacebook description]
	 */
	// public function OauthFacebook()
	// {
	// 	 // Facebook API Configuration
 //        $redirectUrl = 'https:' . ROOT_URL . '/oauth/facebook/verify';
        
 //        //Call Facebook API
 //        $facebook = new Facebook\Facebook(array(
 //          'app_id'  => $this->fbID,
 //          'app_secret' => $this->fbSecret
 //        ));
 //        $helper = $facebook->getRedirectLoginHelper();
 //        $permissions = array('email');
 //        $loginUrl = $helper->getLoginUrl($redirectUrl, $permissions);
        
 //        return $loginUrl;
	// }

	/**
	 * [OauthFacebookVerify description]
	 */
	// public function OauthFacebookVerify()
	// {
	// 	// Decripty
	// 	$username = $this->session->userdata('username');
	// 	$userkrip = $this->dekrip($username);
	// 	// End Decript

	// 	//Call Facebook API
 //        $facebook = new Facebook\Facebook(array(
 //          'app_id'  => $this->fbID,
 //          'app_secret' => $this->fbSecret
 //        ));
	// 	$helper = $facebook->getRedirectLoginHelper();
	// 	try {
	// 	  	$accessToken = $helper->getAccessToken();
	// 	}
	// 	catch(Facebook\Exceptions\FacebookResponseException $e) {
	// 	  	// When Graph returns an error
	// 		$this->logout();
	// 	  	echo 'Graph returned an error: ' . $e->getMessage();
	// 	  	exit;
	// 	} 
	// 	catch(Facebook\Exceptions\FacebookSDKException $e) {
	// 	  	// When validation fails or other local issues
	// 		$this->logout();
	// 	  	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	// 	  	exit;
	// 	}

	// 	if (isset($accessToken)) {
	// 	  	// Logged in!
	// 		$_SESSION['facebook_access_token'] = (string) $accessToken;

	// 		// OAuth 2.0 client handler
	// 		$oAuth2Client = $facebook->getOAuth2Client();
	// 		// Exchanges a short-lived access token for a long-lived one
	// 		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
	// 		// Sets the default fallback access token so we don't have to pass it to each request
	// 		$facebook->setDefaultAccessToken($longLivedAccessToken);
	// 		try {
	// 		  	// Returns a `Facebook\FacebookResponse` object
	// 			$response = $facebook->get('/me?fields=email,name', $_SESSION['facebook_access_token']);
	// 		} 
	// 		catch(Facebook\Exceptions\FacebookResponseException $e) {
	// 	  		// When Graph returns an error  
	// 			// $this->logout();
	// 			echo 'Graph returned an error: ' . $e->getMessage();
	// 			// var_export('coba test');die();
	// 			exit;
	// 		} 
	// 		catch(Facebook\Exceptions\FacebookSDKException $e) {
	// 	  		// When validation fails or other local issues
	// 			// $this->logout();
	// 			echo 'Facebook SDK returned an error: ' . $e->getMessage();
	// 			exit;
	// 		}

	// 		$user = $response->getGraphUser();
	// 		$data['email']= ($user->getEmail() != null || $user->getEmail() != '') ? $user->getEmail() : null;
	// 		if ($data['email'] != null) {
	// 			$processOAuth = $this->MainModel->processOAuth($data);
	// 			if ($processOAuth != null) {
	// 				// if data not valid or user found
						
	// 				// create session from credential
	// 				$this->makeSession($processOAuth);
	// 				// save into userlogin
	// 				$this->db->where('username', $userkrip);
	// 				$this->db->delete('userlogin');
	// 				// check, create of update statistic login
	// 				$this->countStatistic();
	// 				// create log of user
	// 				$this->userLog();

	// 				// redirect to main page
	// 				redirect('beranda', 'refresh');
	// 			}
	// 			else {
	// 				$this->session->set_flashdata('message', 'Maaf akun Facebook <b>'.$user->getName().'</b> tidak ditemukan pada sistem');
	// 				$this->logout();

	// 				redirect('/', 'refresh');
	// 			}
	// 		}
	// 		else {
	// 			$this->session->set_flashdata('message', 'Maaf akun Facebook <b>'.$user->getName().'</b> tidak ditemukan pada sistem');
	// 			$this->logout();

	// 			redirect('/', 'refresh');
	// 		}
	// 	}
	// 	else {
	// 		$this->session->set_flashdata('message', 'Token Facebook tidak valid');
	// 		$this->logout();

	// 		redirect('/', 'refresh');
	// 	}
	// }

	/**
	 * [OauthGoogle description]
	 */
	// public function OauthGoogle()
	// {
	// 	// google API Configuration
 //        $redirectUrl = 'https:' . ROOT_URL . '/oauth/google/verify';
        
 //        //Call google API
 //        $client = new Google_Client();
	// 	$client->setApplicationName("E-Lecturer OAuth");
	// 	$client->setClientId($this->googleID);
	// 	$client->setClientSecret($this->googleSecret);
	// 	$client->setRedirectUri($redirectUrl);
	// 	$client->addScope("https://www.googleapis.com/auth/userinfo.email");
 //        $google_url = $client->createAuthUrl();
        
 //        return $google_url;
	// }

	/**
	 * [OauthGoogleVerify description]
	 */
	// public function OauthGoogleVerify()
	// {
	// 	// Decripty
	// 	$username = $this->session->userdata('username');
	// 	$userkrip = $this->dekrip($username);
	// 	// End Decripty

	// 	$redirectUrl = ROOT_URL . '/oauth/google/verify';

	// 	//Call google API
	// 	$client = new Google_Client();
	// 	$client->setApplicationName("E-Lecturer OAuth");
	// 	$client->setClientId($this->googleID);
	// 	$client->setClientSecret($this->googleSecret);
	// 	$client->setRedirectUri($redirectUrl);
	// 	$client->addScope("https://www.googleapis.com/auth/userinfo.email");
	// 	if (!isset($_GET['code'])) {
	// 	  $auth_url = $client->createAuthUrl();
		  
	// 	  redirect($auth_url,'refresh');
	// 	} 
	// 	else {
	// 		$authenticate = $client->authenticate($_GET['code']);
	// 		$_SESSION['google_access_token'] = $authenticate;

	// 		$user = $client->verifyIdToken($authenticate['id_token']);
	// 		if (isset($user['email']) || $user['email'] != '') {
	// 			$data['email']= $user['email'];
	// 			$processOAuth = $this->MainModel->processOAuth($data);
	// 			if ($processOAuth != null) {
	// 				// if data not valid or user found
							
	// 				// create session from credential
	// 				$this->makeSession($processOAuth);
	// 				// save into userlogin
	// 				$this->db->where('username', $userkrip);
	// 				$this->db->delete('userlogin');
	// 				// check, create of update statistic login
	// 				$this->countStatistic();
	// 				// create log of user
	// 				$this->userLog();

	// 				// redirect to main page
	// 				redirect('beranda', 'refresh');
	// 			}
	// 			else {
	// 				$this->session->set_flashdata('message', 'Maaf akun Google dengan alamat Email <b>'.$data['email'].'</b> tidak ditemukan pada sistem');
	// 				$this->logout();
					
	// 				redirect('/', 'refresh');
	// 			}
	// 		}
	// 		else {
	// 			$this->session->set_flashdata('message', 'Harap konfirmasi Email anda');

	// 			redirect('/', 'refresh');
	// 		}
	// 	}
	// }
}
