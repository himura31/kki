<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/**
 * Route of Landing Page
 */
$route['default_controller'] = 'auth';

/**
 * Route of Dashboard Class( DOSEN )
 */
$route['dashboard'] = 'dashboard';
$route['dashboard/graph'] = 'dashboard/chart';
$route['dashboard/schedule'] = 'dashboard/schedule';
/**

/**
 * Route of Scores Class
 */
$route['scores'] = 'scores';
$route['scores/get/component'] = 'scores/komponen';
$route['scores/get/ipk'] = 'scores/ipk';
$route['scores/get/khs'] = 'scores/khs';
$route['scores/get/print'] = 'scores/exportpdf';
// $route['scores/security'] = 'scores/formConfirmation';
// $route['scores/input/(:any)']['POST'] = 'scores/validateConfirmation';
// $route['scores/save/input']['POST'] = 'scores/saveScores';
// $route['scores/calculate'] = 'scores/getTotalScore';

/**
 * Route of Presensi Class
 */
$route['presensi'] = 'presensi';
$route['presensi/get/rekap'] = 'presensi/rekSchedule';
$route['presensi/get/detail'] = 'presensi/detSchedule';
$route['presensi/get/print/absent'] = 'Presensi/PrintAbsent';
$route['presensi/get/print/student'] = 'Presensi/PrintStudent';
$route['presensi/get/print/subject'] = 'Presensi/PrintSubject';
/**

 * Route of Billing And Payment Class
 */
$route['payment'] = 'payment';
$route['payment/get/print'] = 'payment/exportdatapdf';
$route['payment/get/export'] = 'payment/exportdataexcel';

/**

 * Route of Billing And Payment List Class
 */
$route['listclass'] = 'Listclass';

/**
 * Route of Download Class
 */
$route['download'] = 'download';
$route['download/get'] = 'download/getDownload';
$route['download/confirmation'] = 'download/formConfirmation';
$route['download/get/file'] = 'download/getFile';

/**
	* Route of Cost Class
 */
$route['upload_material'] = 'uploadmaterial';
$route['upload_material/downloader'] = 'uploadmaterial/downloader';
$route['upload_material/form'] = 'uploadmaterial/uploadForm';
$route['upload_material/form/campus'] = 'uploadmaterial/getCampus';
$route['upload_material/form/class'] = 'uploadmaterial/getClass';
$route['upload_material/form/subjects'] = 'uploadmaterial/getMataKuliah';
$route['upload_material/save']['POST'] = 'uploadmaterial/saveMaterial';

/**
 * Route of announcement Class
 */
$route['announcement'] = 'announcement';
$route['announcement/tampil'] = 'announcement/detail';
$route['announcement/graduation'] = 'announcement/graduation';
$route['announcement/graduation/list']['POST'] = 'announcement/registerGraduation';
$route['announcement/print_statement_letter'] = 'announcement/generate_pdf';

/**
 * Route of eub Class
 */
$route['feedback_evaluation'] = 'eub';
$route['feedback_evaluation/get/semester']['POST'] = 'eub/getSemester';
$route['feedback_evaluation/get/campus']['POST'] = 'eub/getCampus';
$route['feedback_evaluation/get/class']['POST'] = 'eub/getClass';
$route['feedback_evaluation/get'] = 'eub/getEub';
$route['feedback_evaluation/graph'] = 'eub/getChart';
$route['feedback_evaluation/recapitulation'] = 'eub/getRecapitulation';
// $route['feedback_evaluation/get']['POST'] = 'eub/getEub';
// $route['feedback_evaluation/get/semester'] = 'eub';

/**
 * Route of file Class
 */
$route['assignment_box'] = 'file';
$route['assignment_box/get_class']['POST'] = 'file/getClass';
$route['assignment_box/get_subject']['POST'] = 'file/getSubject';

$route['assignment_box/get']['POST'] = 'file/getBoxFile';
// $route['kotak_file_tugas/detail/(:any)'] = 'file/detail';
$route['assignment_box/detail/(:any)'] = 'file/detail';
$route['assignment_box/get/form']['POST'] = 'file/showFormUpload';
$route['assignment_box/edit/form']['POST'] = 'file/showFormEdit';
$route['assignment_box/save']['POST'] = 'file/saveUpload';
$route['assignment_box/edit']['POST'] = 'file/saveEdit';

/**
 * Route of users Class
 */
$route['user/profile'] = 'users/profile';
$route['user/profile/save']['POST'] = 'users/save';
$route['user/profile/detail/save']['POST'] = 'users/detailSave';
$route['user/change_password']['POST'] = 'users/updatePassword';
$route['user/friends_profile'] = 'users/profile_other';
$route['user/friends_profile/search/(:any)'] = 'users/findOneUser';
// $route['users/friends_profil/search']['POST'] = 'users/find';
// $route['users/major']['POST'] = 'users/concentrationBy';



/**
 * Route of LKM
 */
$route['lkm/ambil']['POST'] = 'lkm/getLkm';
$route['lkm/ambil/cabang']['POST'] = 'lkm/getCampus';
$route['lkm/ambil/matkul']['POST'] = 'lkm/getMatkul';
$route['lkm/ambil/kelas']['POST'] = 'lkm/getKelas';
$route['lkm/ambil/peserta']['POST'] = 'lkm/getPesertaKelas';
// $route['lkm/ambil/peserta']['POST'] = 'lkm/getPeserta';
$route['lkm/honor'] = 'lkm/honorDosen';
$route['lkm/honor/ambil']['POST'] = 'lkm/getHonorDosen';
$route['lkm/form/(:any)'] = 'lkm/inputLKM/$1';
$route['lkm/delete/(:any)'] = 'lkm/deleteLKM/$1';
$route['lkm/form'] = 'lkm/inputLKM';
$route['lkm/save']['POST'] = 'lkm/setLkm';
$route['lkm/save-header']['POST'] = 'lkm/saveHeaderLkm';
$route['lkm/cetak-slip/(:num)'] = 'lkm/printLkm/$1';

/**
 * Route of API Class
 */
$route['api/sendemailfromlecturetask']['POST'] = 'api/sendEmailFromLectureTask';
$route['api/getdistricts'] = 'api/getDistricts';
// $route['api/test'] = 'api/tetss';

/* validasi login */
$route['api/auth_api']['POST'] = 'api/authApi';
/* ambil scores */
$route['api/get_nilai/(:num)']['POST'] = 'api/getNilai/$1';
$route['api/get_nilai']['POST'] = 'api/getNilai';
$route['api/set_nilai']['POST'] = 'api/setNilai';
/* ambil List Kampus */
$route['api/get_campus']['POST'] = 'api/getCampus';
/* ambil Kelas */
$route['api/get_class']['POST'] = 'api/getClass';
/* ambil list mhs */
$route['api/get_mahasiswa']['POST'] = 'api/getNilaiMahasiswa';
/* ambil Tahun Akadmeik */
$route['api/get_ta']['POST'] = 'api/getAcademicYear';
/* ambil data schedule mengajar */
$route['api/get_schedule']['POST'] = 'api/getSchedule';
/* ambil data SAP mengajar */
$route['api/get_sap']['POST'] = 'api/getSAP';
/* ambil data EUB Dosen */
$route['api/get_eub']['POST'] = 'api/getEub';
/* ambil list tugas */
$route['api/get_tugas']['POST'] = 'api/getTugas';
/* upload tugas */
$route['api/set_tugas']['POST'] = 'api/setTugas';
/* get recent tugas */
$route['api/get_recent_tugas']['POST'] = 'api/getRecentTugas';
/* get recap tugas */
$route['api/get_recap_tugas']['POST'] = 'api/getRecapTugas';
/* get detail tugas */
$route['api/get_tugas_detail']['POST'] = 'api/getTugasDetail';
/* Set profil dosen */
$route['api/set_profile_dosen']['POST'] = 'api/setProfileDosen';
/* Set Password Dosen */
$route['api/set_password_dosen']['POST'] = 'api/setPasswordDosen';

/* ambil pembayaran */
$route['api/get_cost']['POST'] = 'api/getCost';
/* ambil announcement */
$route['api/get_announcement']['POST'] = 'api/getannouncement';
/* ambil download list */
$route['api/get_materi']['POST'] = 'api/getMateriDownload';
/* ambil profile full with detail */
$route['api/get_profile']['POST'] = 'api/getMyProfile';
/* ambil distrik list forlap */
$route['api/get_districts']['POST'] = 'api/getForlapDistricts';
/* update profil pribadi */
$route['api/set_profile']['POST'] = 'api/setMyProfile';
/* update profile detail  */
$route['api/set_detail_profile']['POST'] = 'api/setDetailProfile';
/* ubah password */
$route['api/set_password']['POST'] = 'api/setPassword';
/* validasi bayaran */
$route['api/validate_payment']['POST'] = 'api/validatePayment';
/* ambil IPK all semester untuk chart */
$route['api/get_ipk']['POST'] = 'api/getIPKAll';
/* ambil profil teman */
$route['api/get_friends']['POST'] = 'api/getOtherProfile';
/* ambil list cabang */
$route['api/get_branch']['POST'] = 'api/getBranch';
/* ambil list jurusan */
$route['api/get_jurusan']['POST'] = 'api/getConcentration';
/* kirim saran insert to table feedback */
$route['api/send_saran']['POST'] = 'api/sendSaran';
/* upload Buku */
$route['api/upload_buku/(:any)']['GET'] = 'api/downloadBook/$1';

/**
 * Oauth
 */
// callback facebook API
$route['oauth/facebook/verify'] = 'auth/OauthFacebookVerify';
// callback google API
$route['oauth/google/verify'] = 'auth/OauthGoogleVerify';

/**
 * Route of overriding and translate uri dashes
 */
$route['404_override'] = 'auth/notFound';
$route['translate_uri_dashes'] = FALSE;
