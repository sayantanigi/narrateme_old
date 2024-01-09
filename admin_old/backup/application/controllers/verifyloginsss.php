<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class VerifyLogin extends CI_Controller {



 function __construct()

 {

   parent::__construct();

   $this->load->model('user','',TRUE);

 }



 function index() {

   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');

   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');



   if($this->form_validation->run() == FALSE)

   {

     

     $this->load->view('login_view');

   }

   else{

     redirect('home', 'refresh');

   }



 }



 function check_database($password)

 {

	 $this->load->library('session');

   //Field validation succeeded.  Validate against database

   $username = $this->input->post('username');



   //query the database

   $result = $this->user->login($username, $password);



   if($result){

     $sess_array = array();

     foreach($result as $row){

       $sess_array = array(

         'id' => $row->AdminId,

         'username' => $row->UserName

       );

       $this->session->set_userdata('logged_in', $sess_array);

     }

     return TRUE;

   }else{

	   //$data['title'] = "Narrate Me Login";

   //$this->load->view('headerlogin',$data);

   //$this->load->helper(array('form'));

   $this->load->view('login_view');

   $this->load->view('footerlogin');

     $this->form_validation->set_message('check_database', 'Invalid username or password');

	 

     return false;

   }

 }

}

?>