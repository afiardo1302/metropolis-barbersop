<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
         $this->load->model('mod_crud');
         $this->load->library('email');
         $this->load->helper('url');

    }
	 function index(){
	 	if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/myControl/viewLogin');
   	 }
	 	$this->load->helper('url');
		$data = $this->mod_crud->getFeedback();
		$this->load->view('admin_tabel',array('data' => $data));

	}
	public function do_insert(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$komentar = $_POST['komentar'];
    	$target_dir = "uploads/";

    	//Config emaill
    	$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		//$config['smtp_timeout'] = ‘7’;
		$config['smtp_user'] = "sapijantan1@gmail.com"; 
		$config['smtp_pass'] = "lolipop777";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['validation'] = TRUE;
		$this->email->initialize($config);

		//Kirim Email
		$this->email->to($email);
		$this->email->from('sapijantan1@gmail.com','Sapi Jantan');
		$this->email->subject('Thanks Giving');
		$this->email->message('Terimakasih atas feedback yang anda berikan. Kepuasan anda adalah segalanya bagi kami METROPOLIST Barbershop');
		$this->email->send();
		

    	
		
		
		
		$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["userfile"]["name"]). " has been uploaded.";
    }	 else {
        echo "Sorry, there was an error uploading your file.";
    }
		$image=basename( $_FILES["userfile"]["name"],".jpg");

				

		$data_insert = array(
			'nama' => $nama,
			"email" => $email,
			"alamat" => $alamat,
			"komentar" => $komentar,
			"img" => $image,
			);

		$res = $this->mod_crud->InsertData('feedback',$data_insert);
		if($res>=1){
			$sent = $this->email->send();
			var_dump($sent);	
			echo '<script language="javascript">';
				echo 'alert("Feedback telah dikirim");';
				echo 'window.history.go(-1);';
				echo '</script>';
			redirect('index.php/myControl/viewFeedback');
			
			

		}
		else{
			echo "<h2> GAGAL</h2>";
		}
	}
	public function do_delete($nama){
		$where = array('nama' => $nama);
		$res = $this ->mod_crud->DeleteData('feedback',$where); 
		if($res>=1){
			redirect('index.php/crud/index');
		}
	}


	
}

	
