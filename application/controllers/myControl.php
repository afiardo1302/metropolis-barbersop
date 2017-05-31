<?php
class MyControl extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->model('modelku');
	$this->load->model('mod_crud');
	$this->load->model('mod_produk');
}
		function index() {
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}
		function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$enc = sha1($password);
			$i = $this->modelku->authen_user($username);
			$isLogin = $this->modelku->login_authen($username, $enc);
			

			if ($isLogin == true) {
			$data_session = array(
				'nama'=>$username,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);	
			redirect(base_url("index.php/crud"));

		}
			else{
				$this->index();
				echo '<script language="javascript">';
				echo 'alert("Login Gagal");';
				echo 'window.history.go(-1);';
				echo '</script>';
			
		}	
		
	}
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('index.php/myControl/viewLogin'));

		}
		//Ga dipake
		function read(){
			$data = $this->load->model('mod_crud/getFeedback');
			$dataTampil = array('data'=>$data);
			$this->load->view('tabel',$dataTampil);
			
			$this->load->view('tabel');

		}
		function admin(){
			$this->load->view('admin');	

		}
		function viewLogin(){
			$this->load->view('login');	

		}
		
		function indextest(){
			$this->load->view('index');	

		}
		
		function viewShop(){
			$data = $this->mod_produk->getProduk();
			$this->load->view('shop', array('data' => $data));	

		}
		function viewFeedback(){
			$this->load->view('feedback');	

		}
		function viewFind(){
			$this->load->view('find');	

		}
		//tabel Feedback
		function viewAdminTabel(){
			// $data = $this->mod_crud->getFeedback();
			// $this->load->view('admin_tabel');	
			redirect(base_url("index.php/crud"));

		}
		function viewFormProduk(){
			$this->load->view('form_produk');	

		}
		function viewFormEdit($kode_produk){
			// $data = $this->mod_produk->getProduk();
			

			$produk = $this->mod_produk->getProduk("where kode_produk = '$kode_produk'");
			$data = array(
			"kode_produk"	=> $produk[0]['kode_produk'],	
			"nama_produk" 	=> $produk[0]['nama_produk'],
			"harga_produk" 	=> $produk[0]['harga_produk'],
			"deskripsi"	 	=> $produk[0]['deskripsi'],
			"img_produk" 	=> $produk[0]['img_produk'],
			
		);
		// $this->load->view('adminBaru/headerBaru');
		// $this->load->view('adminBaru/bodyEditData',$data);	
		$this->load->view('form_edit',$data);

		}
		function viewFormAddAkun(){
			$this->load->view('form_addAkun');


		}
		
		//Tabel Produk
		function viewAdminTabel2(){
			$data = $this->mod_produk->getProduk();
			$this->load->view('admin_tabel2');	
		}
		function loadAdminTabel2(){
			// $data = $this->mod_crud->getProduk();
			// redirect(base_url("index.php/crud_produk"));
			redirect(base_url("index.php/crud_produk"));
		}
		
}
?>