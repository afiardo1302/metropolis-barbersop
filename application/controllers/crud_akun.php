<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_akun extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_akun');

    }
	 function index(){
	 	$this->load->helper('url');
		$data = $this->mod_akun->getAkun();
		$this->load->view('shop',array('data' => $data));
	}
	
	public function do_insert(){
			
     			
     			$username 	= $_POST['username'];
				$password	= sha1($_POST['password']);
				
				              
                
                    $data = array(
						'username'   => $username,
						'password' 	=> $password,
						);
						
					$this->mod_akun->InsertData('akun',$data);
					redirect('index.php/myControl/viewFormAddAkun');
					echo '<script language="javascript">';
					echo 'alert("Produk telah ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';   
	}

	
	public function do_delete($kode_produk){
		$where = array('kode_produk' => $kode_produk);
		$res = $this ->mod_produk->DeleteData('produk',$where); 
		if($res>=1){
			redirect('index.php/Crud_produk/indexAdmin');
		}
	}


	
}

	
