<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

	/**
	 * @author Khaerul <Khaerulistafa@gmail.com>
	 */
	
	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [cleanData description]
	 * @param  [type] $str [description]
	 * @return [type]      [description]
	 */
	public function cleanData($str)
	{
		if (is_array($str)) {
			foreach ($str as $key => $value) {
				$cleaning[$key] = trim($this->db->escape($value)) ;
			}
		}
		else {
			$cleaning = trim($this->db->escape($str));
		}

		return $cleaning ;
	}

	/**
	 * [processAuth description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function processAuth($data)
	{
		$cleaningData = $this->cleanData($data);
		$processAuth = $this->db->get_where('tb_user', array('username' => $data['user'], 'password' => $data['pwd']));
		if (count($processAuth->result_array()) == 1) {
			
			return $processAuth->result_array();
		}
		else {
			
			return null ;
		}
	}

 	public function gettable($params , $table){


 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get($table);
 						  
 		$row = $query->row_array();

 		return $row;	
 	}

 	 public function getform($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_key_result', 'tb_key_result.indicator_id = tb_indicator.id')
 						  ->get('tb_indicator');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformpersonal($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_key_result_personal', 'tb_key_result_personal.indicator_id = tb_indicator_personal.id')
 						  ->get('tb_indicator_personal');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformcorporate($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get('tb_absense');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformabsense($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get('tb_corporate');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function MaxId($table){

 		$query = $this->db->select('MAX(id) as kodeterbesar')
 						  ->get($table);
 						  
 		$row = $query->row_array();

 		return $row;

 	}

 	public function getDataHasilManager($params,$table){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_manager_detail', 'tb_hasil_form_manager_header.id = tb_hasil_form_manager_detail.id_form_header')
 						  ->get($table);
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getDataHasilPersonal($params,$table){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_personal_detail', 'tb_hasil_form_personal_header.id = tb_hasil_form_personal_detail.id_form_header')
 						  ->get($table);
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getDataHasilAbsense($params,$table){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_absense_detail', 'tb_hasil_form_absense_header.id = tb_hasil_form_absense_detail.id_form_header')
 						  ->get($table);
 						  
 		$row = $query->row_array();

 		return $row;	
 	}

 	public function getDataHasilCorporate($params,$table){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_corporate_detail', 'tb_hasil_form_corporate_header.id = tb_hasil_form_corporate_detail.id_form_header')
 						  ->get($table);
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function create_form_manager($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_manager_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
				'id_form_header'  => $value['id_form_header'],
				'personal_persen' => $value['manager_persen'],
				'personal_score'  => $value['manager_score'],
				'personal_nilai'  => $value['manager_nilai']
 			); 
 		}
 		$this->db->insert_batch('tb_hasil_form_manager_detail',$datadetail);

 	}

 	 public function create_form_personal($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_personal_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'personal_persen' => $value['manager_persen'],
 					'personal_score' => $value['manager_score']
 			); 
 		}
 		$this->db->insert_batch('tb_hasil_form_personal_detail',$datadetail);

 	}

 	public function create_form_absense($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_absense_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'absense_nilai_sendiri' => $value['absense_nilai_sendiri']
 			); 
 		}

 		$this->db->insert_batch('tb_hasil_form_absense_detail',$datadetail);

 	}


 	public function create_form_corporate($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_corporate_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'corporate_nilai_sendiri' => $value['corporate_nilai_sendiri']
 			); 
 		}

 		$this->db->insert_batch('tb_hasil_form_corporate_detail',$datadetail);

 	}


 	public function getDataTable($table){
 		$query = $this->db->select('*')
 						->get($table);

 		$row = $query->result_array();
 		return $row;
 	}

 	public function getDataId($param='',$table, $like=''){
 		$this->db->select('*');
 		if($like != null){
 			$this->db->like('jabatan',$like);
 		}
 		if($param != null){
 		$this->db->where($param);	
 		}
 		$query = $this->db->get($table);
 						  
 		$row = $query->result_array();

 		return $row;	
 	}



	/**
	 * [processAuth description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function processOAuth($data)
	{
		$processOAuth = $this->db->get_where('user_pa', array('email' => $data['email']))->result_array();
		if (count($processOAuth) == 1) {
			foreach ($processOAuth as $key => $value) {
				$data['user'] = $value['username'];
				$data['pwd'] = $value['password'];
			}
			$processAuth = $this->processAuth($data);

			return $processAuth;
		}
		else {
			
			return null ;
		}
	}


		/**
	 * [getBilling description]
	 * @param  [type] $userid [description]
	 * @return [type]         [description]
	 */
	public function getBilling($kodecab,$kelas,$tanggal)
	{
			$query = $this->db->query("SELECT biodata.nim , sum(sebesar) as sebesar, biodata.Nama_Mahasiswa , biodata.telepon , biodata.kelas as Kelas, biaya.ta , biaya.tglrencana from biaya inner join biodata on biaya.nim = biodata.nim where tglrencana < '$tanggal' and terbayar='0' and sebesar <> 0 and biaya.kodecabang='$kodecab' and biodata.status='aktif' and kelas='$kelas' GROUP BY biodata.nim , biaya.ta ORDER BY  biaya.tglrencana ASC");

			$row = $query->result_array();

			return $row;
	}

	public function getScheduleDetail($params , $colums, $orderby){

		$query = $this->db->select($colums)
						->where($params)
						->from('jadual')
						->join('lkm_header' , 'lkm_header.idjadwal = jadual.idjadual')
						->order_by($orderby,'ASC')
						->get();

		$row = $query->result_array();

		return $row;
	}

	public function getNamDos($params,$colums,$groupby){
		
		$query = $this->db->select($colums)
						->where($params)
						->group_by($groupby)
						->get('jadual');

		$row = $query->result_array();

		return $row;
	}



	/**
	 * [getStatisticLogin description]
	 * @param  [type] $userid [description]
	 * @return [type]         [description]
	 */
	public function getStatisticLogin($userid)
	{
		$getStatistic = $this->db->get_where('statistik_pa', array('userid' => $userid))->row_array();
		//membuat tabel baru statistik_pa
		//userdosen -> userid
		return $getStatistic;
	}

	/**
	 * [setStatisticLogin description]
	 * @param [type] $statisticData [description]
	 * @param [type] $trigger       [description]
	 */
	public function setStatisticLogin($statisticData, $trigger, $username="")
	{
		switch ($trigger) {
			case 'update':
				$count = intval($statisticData['loginx']) + 1 ;
				$this->db->where('userid', $statisticData['userid']);
				//userdosen -> userid
				$this->db->update('statistik_pa', array('loginx' => $count));
				break;
			case 'insert':
				$user = $username;
				if($username == null || $username == ""){
					$user = $username;
				}
				$data = array(
					'userid' => $user,
					'loginx' => 1
					); 
				$this->db->insert('statistik_pa', $data);
				break;
		}
	}

	/**
	 * [createUserLog description]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function createUserLog($request = null)
	{
		if ($request == null){
			return false;
		}
		else {
			$this->db->insert('logsystem_pa',$request);
			// logsystemdosen -> logsystemuser
			
			return true;
		}
	}

	/**
	 * [getBio description]
	 * @param  [type] $userid [description]
	 * @return [type]         [description]
	 */
	public function getBio($userid = '' ,$orderBy = '', $field='' , $table='')
	{
		if ($userid != '') {
			if ($orderBy != '') {
				$this->db->order_by($orderBy);
			}
			$this->db->where($field, $userid);
			$getResult = $this->db->get($table)->row_array();

		}
		else {
			if ($orderBy != '') {
				$this->db->order_by($orderBy);
			}
			$getResult = $this->db->get($table)->result_array();
		}

		return $getResult;
	}

	/**
	 * [getBranch description]
	 * @param  [type] $codeBranch [description]
	 * @return [type]             [description]
	 */
	public function getBranch($codeBranch = NULL, $columns = NULL)
	{
		if ($codeBranch == NULL) {
			if ($columns != NULL) {
				if (is_array($columns)){
					foreach ($columns as $column) {
						$this->db->select($column);
					}
				}
				else {
					$this->db->select($columns);
				}
				$getBranch = $this->db->get('cabang')->result_array();
			}

		}
		else {
			$getBranch = $this->db->get_where('cabang', array('kodecabang' => $codeBranch))->row_array();
		}
			
		
		return $getBranch;
	}

	/**
	 * [getMataKuliah description]
	 * @param  string $kodemtk    [description]
	 * @param  string $codeBranch [description]
	 * @param  array $customize   [description]
	 * @return [type]             [description]
	 */
	public function getMataKuliah($kodemtk = '', $codeBranch = '', $smt = '' ,$type = 'custom', $customize = '', $ta = '')
	{
		// var_export($smt);die();
		if ($kodemtk == '' && $customize == ''){

		}	
		else {
			$this->db->join('book_list', 'book_list.kodebuku = mata_kuliah.kodebuku', 'left');
			if($customize==''){
				if ($type == 'all'){
					$this->db->select('*');
				}
				else {
					$this->db->select('Mata_kuliah');
					$this->db->select('sks');
					$this->db->select('fileDesktop');
				}
				if ($codeBranch == '' && $smt == ''){
					$getMataKuliah = $this->db->get_where('mata_kuliah', array('kodemtk' => $kodemtk));
				}
				elseif ($ta != '' && $smt != '') {
					$getMataKuliah = $this->db->get_where('mata_kuliah', array('kodemtk' => $kodemtk, 'Semester' => $smt, 'ta' => $ta, 'kodecabang' => $codeBranch));
				}
				else {
					$getMataKuliah = $this->db->get_where('mata_kuliah', array('kodemtk' => $kodemtk, 'kodecabang' => $codeBranch, 'Semester' => $smt, 'ta' => $ta));
				}
				
				return $getMataKuliah->row_array();
			}else{
				$params = $customize['params'];
				$columns = $customize['columns'];
				$orderBy = $customize['orderBy'];
				$groupBy = $customize['groupBy'];
				$limit = $customize['limit'];

				foreach ($params as $key => $value) {
					$this->db->where($key, $value);
				}
				if ($columns != ''){
					foreach ($columns as $column) {
						$this->db->select($column);
					}
				}
				$this->db->from('mata_kuliah');
				if ($limit != '') {
					$this->db->order_by($orderBy, 'desc');
					$getMaterialStudent = $this->db->limit($limit);
				}
				if ($groupBy != '') {
					$this->db->group_by($groupBy);
				}

				return $this->db->get()->result_array();
			}

		}
	}

	/**
	 * [getMataKuliahBook description]
	 * @param  string $kodemtk    [description]
	 * @param  string $codeBranch [description]
	 * @param  string $smt        [description]
	 * @param  string $type       [description]
	 * @return [type]             [description]
	 */
	public function getMataKuliahBook($kodemtk = '', $codeBranch = '', $smt = '' ,$ta = '', $type = 'custom')
	{
		if ($kodemtk == ''){

		}
		else {
			$this->db->join('matakuliah', 'matakuliah.kodemtk = mata_kuliah.kodemtk');
			if ($type == 'all'){
				$this->db->select('*');
			}
			else {
				$this->db->select('Mata_kuliah');
				$this->db->select('mata_kuliah.sks');
				$this->db->select('fileDesktop');
				$this->db->join('book_list', 'book_list.kodebuku = mata_kuliah.kodebuku', 'left');
			}
			if ($codeBranch == '' && $smt == '' && $ta == ''){
				$getMataKuliah = $this->db->get_where('mata_kuliah', array('mata_kuliah.kodemtk' => $kodemtk));
			}
			else {
				$getMataKuliah = $this->db->get_where('mata_kuliah', array('mata_kuliah.kodemtk' => $kodemtk, 'mata_kuliah.kodecabang' => $codeBranch, 'mata_kuliah.semester' => $smt, 'mata_kuliah.ta' => $ta));
			}

			return $getMataKuliah->row_array();
		}
	}

	/**
	 * [getClass description]
	 * @param  [type] $param [description]
	 * @param  string $row   [description]
	 * @return [type]        [description]
	 */
	public function getClass($param, $row = 'single')
	{
		foreach ($param as $key => $value) {
			$this->db->where($key, $value);
		}
		
		$getCostSum = $this->db->get('kelas');
		if ($row == 'multiple'){
			return $getCostSum->result_array();
		}
		else {
			return $getCostSum->row_array();
		}
	}

	/**
	 * [getLecturer description]
	 * @param  [type] $code    [description]
	 * @param  [type] $columns [description]
	 * @return [type]          [description]
	 */
	public function getLecturer($code, $columns = NULL)
	{
		$this->db->where('kodedosen', $code);
		if ($columns != NULL) {
			if (is_array($columns)){
				foreach ($columns as $column) {
					$this->db->select($column);
				}
			}
			else {
				$this->db->select($columns);
			}
			$getLecturer = $this->db->get('dosen')->row_array();
		}
		else {
			$getLecturer = $this->db->get('dosen')->result_array();
		}

		return $getLecturer;
	}

	public function getAbsent($params){

		$query = $this->db->select('*')
							->where('id_lkm', $params)
							->get('lkm_detail');

		$row = $query->result_array();

		return $row;
	}

	/**
	 * [getAnnoucement description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function getAnnoucement($data)
	{
		$this->db->where('kelas', $data['kelas']);
		$this->db->where('kodecabang', $data['kodecabang']);
		$getAnnoucement = $this->db->get('pengumuman')->result_array();

		return $getAnnoucement;
	}

	/**
	 * [getDetailAnnoucement description]
	 * @param  string $id [description]
	 * @return [type]     [description]
	 */
	public function getDetailAnnoucement($id = '')
	{
		if ($id == ''){

			return '';
		}
		else {
			$this->db->where('id', $id);
			$getAnnoucement = $this->db->get('pengumuman')->result_array();

			return $getAnnoucement;
		}
	}

	/**
	 * [checkLimitTime description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function checkLimitTime($id)
	{
		date_default_timezone_set("Asia/Jakarta");
		$currentDate = date("Y-m-d");

		$this->db->where('id', $id);
		$getLimit = $this->db->get('batasanwaktu')->row_array();
		$check = ($currentDate > $getLimit['batas']) ? false : true;
		
		return $check;
	}

	/**
	 * [storeMaterial description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function storeMaterial($data)
	{
		return $this->db->insert('materidosen', $data);
	}

	/**
	 * [storeTask description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function storeTask($data)
	{
		return $this->db->insert('kotakmateri', $data);
	}

	/**
	 * [editTask description]
	 * @param  [type] $id  [description]
	 * @param  [type] $set [description]
	 * @return [type]      [description]
	 */
	public function editTask($id, $set)
	{
		$this->db->where('nomateri', $id);

		return $this->db->update('kotakmateri', $set);
	}

	/**
	 * [ifExistsMaterial description]
	 * @param  [type] $nim [description]
	 * @param  [type] $id  [description]
	 * @return [type]      [description]
	 */
	public function ifExistsMaterial($nim, $id)
	{
		$this->db->where('nim', $nim);
		$this->db->where('idmateri', $id);
		$countMaterial = $this->db->get('materimahasiswa')->num_rows();

		return ($countMaterial == 1) ? true : false ;
	}

	/**
	 * [updateBio description]
	 * @param  [type] $data [description]
	 * @param  [type] $nim  [description]
	 * @return [type]       [description]
	 */
	public function updateBio($data, $id)
	{
		$this->db->where('kodedosen', $id);
		$this->db->update('dosen', $data);

		if ($this->db->affected_rows() == 1) {

			return true;
		}
		else {

			return false;
		}
	}

	/**
	 * [getCmbKelas description]
	 * @param  [type] $id [description]
	 * @param  [type] $kodecabang  [description]
	 * @return [type]       [description]
	 */
	public function getCmbKelas($id , $kodecabang)
	{
		$query = $this->db->query("SELECT kelas FROM kelas WHERE kodecabang='$kodecabang' AND nik='$id'");

		$row = $query->result();

		return $row;
	}

		public function getlistclass($id , $kodecabang)
	{
		$query = $this->db->query("SELECT kelas.* , cabang.namacabang , cabang.kepalacabang FROM kelas INNER JOIN cabang on kelas.kodecabang = cabang.kodecabang WHERE kelas.kodecabang='$kodecabang' AND nik='$id'");

		$row = $query->result();

		return $row;
	}

	public function getDataNama($id,$kodecabang,$params){
		$query = $this->db->query("SELECT biodata.nim as nim , biodata.kelas as kelas , biodata.Nama_Mahasiswa as nama ,jurusan.namajurusan as jurusan , jurusan.prodi rumpun , jurusan.kaprodi as kbk FROM  (((kelas INNER JOIN cabang on kelas.kodecabang = cabang.kodecabang ) inner join biodata on kelas.kelas = biodata.kelas) inner join jurusan on kelas.kodejurusan = jurusan.kodejurusan ) WHERE kelas.kodecabang='$kodecabang' AND nik='$id' AND biodata.status='aktif' AND Nama_Mahasiswa like '%$params%'");

		return $query;
	}

	public function Simpan_data($table,$data){

		$query = $this->db->insert($table , $data);
	}



	/**
	 * [getCmbKelas description]
	 * @param  [type] $id [description]
	 * @param  [type] $kodecabang  [description]
	 * @return [type]       [description]
	 */
		public function getListsiswa($params, $columns = '')
	{
		if($columns == ''){
			$query = $this->db->select('*')
			->where($params)
			->get('biodata');
		}else{
			$query = $this->db->select($columns)
			->where($params)
			->get('biodata');
		}

		$row = $query->result_array();

		return $row;
	}


		public function getDltsiswa($params)
	{
		$query = $this->db->select('*')
						->where($params)
						->get('biodata');

		$row = $query->result_array();

		return $row;
	}



	/**
	 * [getCmbTa description]
	 * @param  [type] $kodecabang [description]
	 * @return [type]       [description]
	 */
		public function getCmbTa($params,$colums)
	{
		$query = $this->db->select($colums)
						->where($params)
						->group_by('ta')
						->get('biaya');

		$row = $query->result_array();

		return $row;
	}


 
	/**
	 * [getConcentration description]
	 * @param  [type] $code    [description]
	 * @param  [type] $columns [description]
	 * @return [type]          [description]
	 */
	public function getConcentration($code, $columns = NULL)
	{
		$this->db->where('kodejurusan', $code);
		if ($columns != NULL) {
			if (is_array($columns)){
				foreach ($columns as $column) {
					$this->db->select($column);
				}
			}
			else {
				$this->db->select($columns);
			}
			$getLecturer = $this->db->get('jurusan')->row_array();
		}
		else {
			$getLecturer = $this->db->get('jurusan')->result_array();
		}

		return $getLecturer;
	}

	/**
	 * [getCredentials description]
	 * @param  [type] $nim [description]
	 * @return [type]      [description]
	 */
	public function getCredentials($userid)
	{
		$this->db->select('username,password');
		$credentials = $this->db->get_where('user_pa', array('nik' => $userid))->row_array();

		return $credentials;
	}

	/**
	 * [newPassword description]
	 * @param  [type] $nim   [description]
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public function newPassword($id, $value)
	{
		$this->db->where('nik', $id);
		$this->db->update('user_pa', array('password' => $value));

		if ($this->db->affected_rows() == 1) {

			return true;
		}
		else {

			return false;
		}
	}

	/**
	 * [findingUser description]
	 * @param  [type] $param [description]
	 * @return [type]        [description]
	 */
	public function findingUser($param, $order_by = '', $row = 'single')
	{
		if ($order_by != ''){
			$this->db->order_by($order_by);
		}
		foreach ($param as $key => $value) {
			$this->db->where($key, $value);
		}
		
		$getUsers = $this->db->get('biodata');
		if ($row == 'multiple'){
			return $getUsers->result_array();
		}
		else {
			return $getUsers->row_array();
		}
	}

	/**
	 * [getConcentrationBy description]
	 * @param  [type] $param   [description]
	 * @param  [type] $columns [description]
	 * @return [type]          [description]
	 */
	public function getConcentrationBy($param, $columns = null)
	{
		foreach ($param as $key => $value) {
			$this->db->where($key, $value);
		}

		if ($columns != NULL) {
			if (is_array($columns)){
				foreach ($columns as $column) {
					$this->db->select($column);
				}
			}
			else {
				$this->db->select($columns);
			}
			$concentration = $this->db->get('jurusancabang')->result_array();
		}

		return $concentration;
	}

	/**
	 * [getMaterial description]
	 * @param  [type] $params  [description]
	 * @param  string $colums  [description]
	 * @param  string $orderBy [description]
	 * @param  string $groupBy [description]
	 * @return [type]          [description]
	 */
	public function getMaterial($params, $columns = '', $orderBy = '', $groupBy = '')
	{
		$select = $this->select('materidosen', $params, $columns, $orderBy, $groupBy);

		return $select;
	}

	/**
	 * [getLogMaterial description]
	 * @param  [type] $params  [description]
	 * @param  string $columns [description]
	 * @param  string $orderBy [description]
	 * @param  string $groupBy [description]
	 * @return [type]          [description]
	 */
	public function getLogMaterial($params, $columns = '', $orderBy = '', $groupBy = '')
	{
		$select = $this->select('log_materi', $params, $columns, $orderBy, $groupBy);

		return $select;
	}

	/**
	 * [getSchedule description]
	 * @param  string $param   [description]
	 * @param  string $columns [description]
	 * @param  string $orderBy [description]
	 * @param  string $groupBy [description]
	 * @return [type]          [description]
	 */
	public function getSchedule($param = '', $columns = '', $orderBy = '', $groupBy = '')
	{
				$this->db->select($columns);
				$this->db->where($param);
			if($groupBy != null ){
				$this->db->group_by($groupby);
			}else if($orderBy != null){							
				$this->db->order_by($orderBy);
			}
		$select = $this->db->get('jadual');

		$row = $select->result_array();

		return $row;
	}

	// 	public function getSchedulee($param = '', $columns = '', $orderBy = '', $groupBy = '')
	// {
	// 	$query = $this->db->select($columns)
	// 					->where($param)
	// 					->from('jadual')
	// 					->join('mata_kuliah' , 'mata_kuliah.kodemtk = jadual.Kodemtk')
	// 					->group_by($groupBy)
	// 					->order_by($orderBy)
	// 					->get();

	// 	$row = $query->result_array();

	// 	return $row;
	// }

	

	public function getNimSchedule($params , $colums, $groupby){

		$query = $this->db->select($colums)
						->where('idjadwal' , $params)
						->from('lkm_header')
						->join('lkm_detail' , 'lkm_detail.id_lkm = lkm_header.id_lkm')
						->group_by($groupby)
						->get();

		$row = $query->result_array();


		return $row;
	}

	public function getTotal($params){

		$query = $this->db->select('COUNT(id_lkm) as jumlah')
						->get_where('lkm_header' , $params);

		$row = $query->row_array();

		return $row;
	}

	public function getRekapSchedule($params , $groupby= '',$columns=''){

		if($columns != null){
		$this->db->select($columns);	
		}
		$this->db->select('
					sum(case when status="S" then 1 else 0 end ) as Sakit,
					sum(case when status="H" then 1 else 0 end ) as Hadir,
					sum(case when status="I" then 1 else 0 end ) as Izin,
					sum(case when status="A" then 1 else 0 end ) as Alpha,
					sum(case when status="S" then 1  when status="H" then 1 when status="I" then 1 when status="A" then 1 else 0 end ) as Total', FALSE);
		$this->db->from('lkm_header');
		$this->db->join('lkm_detail' , 'lkm_detail.id_lkm = lkm_header.id_lkm');
		$this->db->where($params);
		if ($groupby != null) { 
		$this->db->group_by($groupby);
		}
		$query = $this->db->get();
				
		$row = $query->row_array();

		return $row;


	}


	public function getMatkull($param = '', $groupby='' , $columns = '')
	{
		$select = $this->db->select($columns)
							->where($param)
							->group_by($groupby)
							->get('mata_kuliah');

		$row = $select->result_array();

		
		return $row;
	}


	public function getNamMatkul($params , $colums , $groupby){

		$query = $this->db->select($colums)
							->where('kodemtk', $params)
							->group_by($groupby)
							->get('mata_kuliah');
		$row = $query->row_array();


		return $row;

	}



	public function getAngka($param ='', $columns ='', $table='', $groupby='')
	{

		$query = $this->db->select($columns)
 						  ->group_by($groupby)
 						  ->get_where($table , $param);
 						 
 		$row = $query->result_array();

 		return $row;	
	}

	public function getAngka1($param , $table)
	{

		$query = $this->db->select('semester')
 						  ->group_by('semester')
 						  ->get_where($table , array('kelas' => $param));
 		
 		$row = $query->result_array();				 
 		
 		return $row; 
	}

	public function getScore($param = '', $columns = '', $orderBy = '' , $table)
	{
		$select = $this->db->select($columns)
							->where($param)
							->order_by($orderBy)
							->get($table);

		$row = $select->result_array();

		return $row;
	}

	public function getSiswaKhs($param = '', $columns = '', $orderby = '' , $groupby='' , $table)
	{
		$select = $this->db->select($columns)
							->where($param)
							->group_by($groupby)
							->order_by($orderby)
							->get($table);

		$row = $select->result_array();

		return $row;
	}

	public function getAcademicYear($params , $columns , $groupby , $groupbyy ,$table){
		$query = $this->db->select($columns)
						->where($params)
						->group_by($groupby)
						->group_by($groupbyy)
						->get($table);

		$row = $query->result_array();

		return $row;		
	}

	public function getMataKuliahKhs($kodemtk = '', $codeBranch = '', $smt = '' ,$type = 'custom', $ta = '', $kodecabang='')
	{
		// var_export($smt);die();
		if ($kodemtk == ''){

		}	
		else {
			if ($type == 'all'){
				$this->db->select('*');
				$this->db->join('book_list', 'book_list.kodebuku = mata_kuliah.kodebuku', 'left');
			}
			else {
				$this->db->select('Mata_kuliah');
				$this->db->select('sks');
			}
			if ($codeBranch == '' && $smt == ''){
				$getMataKuliah = $this->db->get_where('mata_kuliah', array('kodemtk' => $kodemtk));
			}
			else {
				$getMataKuliah = $this->db->get_where('mata_kuliah', array('kodemtk' => $kodemtk, 'kodejurusan' => $codeBranch, 'ta' => $ta, 'kodecabang'=>$kodecabang));
			}

			return $getMataKuliah->row_array();
		}
	}

	public function getComponentScore($nim, $smt = '' , $table)
	{

		$count = $this->db->get_where($table, array('nim' => $nim));
		if ($count->num_rows() > 0) {
			$getScore = $this->getScoreKhs($table, $nim, $smt);
		}
		else {
			$getScore = '';
		}

		return $getScore;
	}

	/**
	 * [getScore description]
	 * @param  [type] $table      [description]
	 * @param  [type] $nim        [description]
	 * @param  [type] $codeBranch [description]
	 * @param  string $smt        [description]
	 * @return [type]             [description]
	 */
	public function getScoreKhs($table, $nim, $smt = '')
	{
		if ($smt == '') {
			$this->db->group_by('semester');
			$this->db->order_by('semester', 'asc');
			$getScore = $this->db->get_where($table, array('nim' => $nim));
			
			return $getScore->result_array();
		}
		else {
			$this->db->order_by('kodemtk', 'asc');
			$getScore = $this->db->get_where($table, array('nim' => $nim, 'semester' => $smt));

			return $getScore->result_array();
		}
	}

	// 	public function getIPKScore($nim, $smt = '' , $table)
	// {

	// 	$count = $this->db->get_where($table, array('kelas' => $nim));
	// 	if ($count->num_rows() > 0) {
	// 		$getScore = $this->getScoreKhs($table, $nim, $smt);
	// 	}
	// 	else {
	// 		$getScoreKhs = '';
	// 	}

	// 	return $getScoreKhs;
	// }

	/**
	 * [getScore description]
	 * @param  [type] $table      [description]
	 * @param  [type] $nim        [description]
	 * @param  [type] $codeBranch [description]
	 * @param  string $smt        [description]
	 * @return [type]             [description]
	 */
	public function getScoreIPK($table, $kelas, $smt = '', $ta)
	{
		if ($smt == '') {
			$this->db->group_by('semester');
			$this->db->order_by('semester', 'asc');
			$getScore = $this->db->get_where($table, array('kelas' => $kelas));
			
			return $getScore->result_array();
		}
		else {
			// $this->db->group_by('semester');
			// $this->db->order_by('kodemtk', 'asc');
			$getScore = $this->db->get_where($table, array('kelas' => $kelas, 'semester' => $smt , 'ta' => $ta));

			return $getScore->result_array();
		}
	}
	
	
	/**
	 * [getQuestionsEub description]
	 * @param  [type] $id      [description]
	 * @param  [type] $set     [description]
	 * @param  string $orderBy [description]
	 * @return [type]          [description]
	 */
	public function getQuestionsEub($id = null, $set, $orderBy = '')
	{
		if ($id == null) {
			$this->db->order_by($orderBy);
			$getQuestions = $this->db->get_where('eub_pertanyaan', array('idjenis' => $set))->result_array();
		}

		return $getQuestions;
	}

	/**
	 * [getDistricts description]
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function getDistricts($param)
	{
		$this->db->like('nm_wil', $param);

		$getDistricts = $this->db->get_where('wilayah_forlap', array('id_level_wil' => '3'))->result_array();

		return $getDistricts;
	}

	/**
	 * [getDistrict description]
	 * @param  [type] $param [description]
	 * @return [type]        [description]
	 */
	public function getDistrict($param)
	{
		$this->db->where('display', $param);

		$getDistrict = $this->db->get_where('wilayah_forlap', array('id_level_wil' => '3'))->result_array();

		return $getDistrict[0];
	}

	/**
	 * [getAcademicYear description]
	 * @param  [type] $userid  [description]
	 * @param  string $columns [description]
	 * @return [type]          [description]
	 */
	// public function getAcademicYear($userid, $columns = '')
	// {
	// 	if ($columns != ''){
	// 		foreach ($columns as $column) {
	// 			$this->db->select($column);
	// 		}
	// 	}
	// 	$this->db->group_by('ta');
	// 	$this->db->order_by('ta');
	// 	$getAcademicYear = $this->db->get_where('jadual', array('nik' => $userid))->result_array();
	// 	// $getAcademicYear = $this->db->get_where('jadual', array('kodedosen' => $userid))->result_array();

	// 	return $getAcademicYear;
	// }getNamMatkul

	/**
	 * [getSchedulePeriod description]
	 * @param  [type] $userid  [description]
	 * @param  string $columns [description]
	 * @return [type]          [description]
	 */
	public function getSchedulePeriod($userid, $columns = '', $isGroupByPeriode = false, $year='')
	{
		if ($columns != ''){
			foreach ($columns as $column) {
				$this->db->select($column);
			}
		}
		if($isGroupByPeriode){
			if ($year != '') {
				$this->db->where('LEFT(periode,4)', $year);
			}
			$this->db->group_by('periode');
		}else{
			$this->db->group_by('LEFT(periode,4)');
		}
		$this->db->order_by('periode');
		$getAcademicYear = $this->db->get_where('jadual', array('nik' => $userid, 'periode>=' => (date('Y')-3)))->result_array();
		// $getAcademicYear = $this->db->get_where('jadual', array('kodedosen' => $userid, 'periode>=' => (date('Y')-3)))->result_array();

		return $getAcademicYear;
	}


	/**
	 * [getMhsScore description]
	 * @param  [type] $param   [description]
	 * @param  string $columns [description]
	 * @param  string $orderBy [description]
	 * @param  string $groupBy [description]
	 * @return [type]          [description]
	 */
	public function getMhsScore($param, $columns = '', $orderBy = '', $groupBy = '')
	{		
		// print_r($param);
		// print_r($columns);
		// print_r($orderBy);
		// print_r($groupBy);			
		
		if (is_array($param) && !empty($param)) {
			foreach ($param as $key => $value) {
				$this->db->where($key, $value);
				// print_r($value);
			}
			if ($columns != ''){
				foreach ($columns as $column) {
					$this->db->select($column);
					// print_r($column);
				}
			}
			$tableScore = $this->getTableScore($param['biodata.kodecabang']);
			$this->db->from('biodata');
			$this->db->join($tableScore, 'biodata.nim='.$tableScore.'.nim', 'left');

			$getMhsScore = $this->db->get()->result_array();


			// print_r($getMhsScore);		

			return $getMhsScore;
		}
		else {
			return false;
		}
	}

	/**
	 * [getPartScore description]
	 * @param  [type] $param      [description]
	 * @param  [type] $kodecabang [description]
	 * @return [type]             [description]
	 */
	public function getPartScore($param, $kodecabang)
	{
		$tableScore = $this->getTableScore($kodecabang);

		$this->db->where($param);
		return $this->db->get($tableScore)->result_array();
	}

	/**
	 * [getTableScore description]
	 * @param  [type] $codeBranch [description]
	 * @return [type]             [description]
	 */
	public function getTableScore($codeBranch)
	{
		
		return 'nilai' . $codeBranch;
	}

	/**
	 * [saveScores description]
	 * @param  [type] $params [description]
	 * @param  [type] $column [description]
	 * @param  [type] $val    [description]
	 * @return [type]         [description]
	 */
	public function saveScores($params, $data)
	{
		if (is_array($params) && !empty($params)) {
			foreach ($params as $key => $value) {
				$this->db->where($key, $value);
			}
			$this->db->update($this->getTableScore($params['kodecabang']) ,$data);
			if ($this->db->affected_rows() != 0) {

				return true;
			}
			else {

				return false;
			}
		}
		else {
			return false;
		}

	}

	/**
	 * [getBioStudent description]
	 * @param  [type] $params  [description]
	 * @param  string $columns [description]
	 * @param  string $orderBy [description]
	 * @param  string $groupBy [description]
	 * @return [type]          [description]
	 */
	public function getBioStudent($params, $columns = '', $orderBy = '', $groupBy = '')
	{
		$select = $this->db->select($columns)
							->where($params)
							->group_by($groupBy)
							->order_by($orderBy)
							->get('biodata');

		$row = $select->result_array();

		return $row;
	}



	/**
	 * [verifyAccount description]
	 * @param  string $key [description]
	 * @return [type]      [description]
	 */
	public function verifyAccount($key = '')
	{
		// status code
		// 0 for account available
		// 1 for account has already exists
		// 2 for account not found
		// 3 for bugs in script
		if (is_array($key) || $key != ''){
			// $this->db->where('kodedosen', $key['kodedosen']);
			// $this->db->where('tanggallahir', $key['tanggallahir']);
			// $count = $this->db->get('dosen')->num_rows();

			if ($key['kodedosen'] != '' && $key['tanggallahir'] != ''){
				$this->db->where('kodedosen', $key['kodedosen']);
				$this->db->where('kodedosen', $key['kodedosen']);
				$this->db->select('password');
				$user = $this->db->get('dosen')->row_array();
				if ($user['password'] == '' || $user['password'] == null) {
					
					return '0';
				}
				else {
					return '1';
				}
			}
			else {		
				return '2';
			}
		}
		else {
			return '3';
		}
	}

	/**
	 * [saveSignup description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]

    /**
     * [getLkm description]
     * @param  array $param   [description]
     * @param  array $columns [description]
     * @param  string $orderBy [description]
     * @param  string $groupBy [description]
     * @return array          [description]
     */
    public function getLkm($param, $columns = '', $orderBy = '', $groupBy = ''){
    	if (is_array($param) && !empty($param)) {
			foreach ($param as $key => $value) {
				// if($key=='kodecabang'){
				// 	$this->db->where("jadual.".$key, $value);
				// }elseif($key=='Kodemtk'){
				// 	$this->db->where("jadual.".$key, $value);
				// }else{
				$this->db->where($key, $value);
				// }
			}
			if ($columns != ''){
				foreach ($columns as $column) {
					$this->db->select($column);
				}
			}
			$this->db->from('lkm_header');
			$this->db->join("jadual", "jadual.idjadual = lkm_header.idjadwal");
	        // $this->db->join("kelas", "jadual.Kelas = kelas.kelas");
	        // $this->db->join("mata_kuliah", "mata_kuliah.kodemtk = jadual.Kodemtk");
			if ($groupBy != ''){
				$this->db->group_by($groupBy);
			}
	        if ($orderBy != ''){
				$this->db->order_by($orderBy);
			}
			return $this->db->get()->result_array();;
		} else {
			return false;
		}
    }

    /**
     * [getAbsensiMahasiswa description]
     * @param  string $idjadwal [description]
     * @param  string $idlkm    [description]
     * @return Object           [description]
     */
    public function getAbsensiMahasiswa($idjadwal, $idlkm){
        $this->db->select('b.nim, b.Nama_mahasiswa, c.status');
        $this->db->join("biodata b", "a.nim = b.nim");
        $this->db->join("kehadiran c", "c.nim = b.nim");
        if($idjadwal!=""){
            $this->db->where('a.idjadwal', $idjadwal);
            $this->db->where('c.id_lkm', $idlkm);
        }
        $this->db->order_by('b.Nama_mahasiswa', 'asc');
        $sql = $this->db->get('peserta_kelas a');
        return $sql->result();
    }

	//
	//---------------------------- End of LKM Model
}