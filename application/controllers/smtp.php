<?php defined('BASEPATH') OR exit('No direct script access allowed');

	

	class SMTPMail extends CI_Controller {



		/**

		 * @author Praneeth Nidarshan

		 * @see git@gist.github.com:8d54499e903d35155af6.git

		 */

		public function index()

		{



			$sender_email = "someone@gmail.com";

			$user_password = "password";

			$username = "Howdy";

			$receiver_email = "hody@gmail.com";

			$subject = "Sample";

			$message = "Hello";

			

			$this->emailConfig();



			// Sender email address

			$this->email->from($sender_email, $username);

			// Receiver email address.for single email

			$this->email->to($receiver_email);

			//send multiple email

			$this->email->to("abc@gmail.com,xyz@gmail.com,jkl@gmail.com");

			// Subject of email

			$this->email->subject($subject);

			// Message in email

			$this->email->message($message);

			// It returns boolean TRUE or FALSE based on success or failure

			

			$mail = ($this->email->send()) ? "Sent" : "Failed" ;

			echo $this->email->print_debugger();

			

			echo $mail;

		}



		

		/**

		 * Email Configurations

		 * ** Please deactivate Second-step verification for the smtp_user **

		 */

		private function emailConfig()

		{

			$config = array(

				'protocol' 	=> 'smtp' , 

				'smtp_host' => 'ssl://smtp.googlemail.com' , 

				'smtp_port' => 465 , 

				'smtp_user' => 'someone@gmail.com' ,

				'smtp_pass' => 'your password',

				'mailtype'	=> 'html', 

				'charset' 	=> 'utf-8', 

				'newline' 	=> "\r\n",  

				'wordwrap' 	=> TRUE 

				);

			

			// Load email library and passing configured values to email library

			$this->load->library('email',$config);

		}

	}



?>