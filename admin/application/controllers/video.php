<?php

class Video extends CI_Controller {

		//============Constructor to call Model====================

		function __construct() {

			parent::__construct();

			$this->load->model('video_model');

		}

		//============Constructor to call Model====================

		function index(){

			if($this->session->userdata('is_logged_in')){ 

			$data['title'] = "Add Video";

			$this->load->view('header',$data);

			$this->load->helper(array('form'));

			$this->load->view('videoadd_view');

			$this->load->view('footer');

			}else{

               redirect('main');

            }

		}

		

		public function is_logged_in(){

        header("cache-Control: no-store, no-cache, must-revalidate");

        header("cache-Control: post-check=0, pre-check=0", false);

        header("Pragma: no-cache");

        //header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

        $is_logged_in = $this->session->userdata('logged_in');

        

        if(!isset($is_logged_in) || $is_logged_in!==TRUE){

            redirect('main');

        }

    }

    //=======================Insert Profile Data============
	function add_video(){
		if($this->session->userdata('is_logged_in')){
			$this->form_validation->set_rules('video_date', 'Video Date', 'required|min_length[1]|max_length[25]');
			$this->form_validation->set_rules('link_rec_video', 'Link Rec Video', 'required|min_length[1]|max_length[300]');
			$this->form_validation->set_rules('ip_live_cam', 'Ip Live Cam', 'required|min_length[1]|max_length[50]');
			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Add video";
				$this->load->view('header',$data);
				$this->load->view('videoadd_view');
				$this->load->view('footer');
			} else {
				$data = array(
					'video_date' => date('Y-m-d H:i:s',strtotime($this->input->post('video_date'))),
					'description' => stripcslashes(trim($this->input->post('description'))),
					'link_rec_video' => $this->input->post('link_rec_video'),
					'ip_live_cam' => $this->input->post('ip_live_cam'),
					'status' => 1
				);
				$this->video_model->add_video($data);
				$data1['message'] = 'Data Inserted Successfully';
				redirect('video/success');
			}
		} else {
			redirect('main');
		}
	}
	//=======================Insert Individual Data============
	//=======================Insertion Success message=========

		function success(){

			$data['h1title'] = 'Data Inserted Successfully';

			$data['title'] = 'Add video';

			$this->load->view('header');

			$this->load->view('videoadd_view',$data);

			$this->load->view('footer');

		}

		//=======================Insertion Success message=========

		//================View Individual Data List=============

		function view_video(){

			if($this->session->userdata('is_logged_in')){

			//Loading Database

			$this->load->database();

			//Calling Model

			$this->load->model('video_model');

			//Transfering data to Model

			$query = $this->video_model->view_video();

			$data['ecms'] = $query;

			$data['title'] = "video Data List";

			$this->load->view('header',$data);

			$this->load->view('showvideo');

			$this->load->view('footer');

		

			}else{

				redirect('main');

			}

		}

		//================View Individual Data List=============

  		//================Show Individual by Id=================

		function show_video_id($id) {

			if($this->session->userdata('is_logged_in')){

			

			$data['title'] = "video Edit";

			//Loading Database

			$this->load->database();

			//Calling Model

			$this->load->model('video_model');

			//Transfering data to Model

			$query = $this->video_model->show_video_id($id);

			$data['ecms'] = $query;

			$this->load->view('header',$data);

			$this->load->view('videoedit', $data);

			$data['title'] = "Edit Data List";

			$this->load->view('footer');

		

			}else{

				redirect('main');

			}

		}

   		//================Show Individual by Id=================

  	 	//================Update Individual ====================

	function edit_video() {
		if($this->session->userdata('is_logged_in')) {
			$datalist = array(
				'video_date' => date('Y-m-d',strtotime($this->input->post('video_date'))),
				'link_rec_video' => $this->input->post('link_rec_video'),
				'ip_live_cam' => $this->input->post('ip_live_cam'),
				'status' => $this->input->post('status'),
				'description' =>stripcslashes(trim($this->input->post('description')))
			);
			$id=$this->input->post('id');
			$data['title'] = "video Edit";
			$this->load->database();
			$this->load->model('video_model');
			$query = $this->video_model->edit_video($id,$datalist);
			$data1['message'] = 'Data Inserted Successfully';
			redirect('video/successupdate');	
		} else {
			redirect('main');
		}
	}

		//================Update Individual ====================

  		//=======================Update Success message=========

		function successupdate(){

			if($this->session->userdata('is_logged_in')){

			

			//loading database

			$this->load->database();

			//Calling Model

			$this->load->model('video_model');

			//Transfering data to Model

			$query = $this->video_model->view_video();

			$data['ecms'] = $query;

			$data['title'] = "video  List";

			$datamsg['h1title'] = 'Data Updated Successfully';

			$this->load->view('header',$data);

			$this->load->view('showvideo',$datamsg);

			$this->load->view('footer');

		

			}else{

				redirect('main');

			}

		}

		//=======================Update Success message=========

		//=======================Delete Individual==============

		function delete_video($id){

			if($this->session->userdata('is_logged_in')){

			

			//Loading  Database

			$this->load->database();

			//Transfering data to Model

			$this->video_model->delete_video($id);

			$data1['message'] = 'Data Inserted Successfully';

			redirect('video/successdelete');

		

			}else{

				redirect('main');

			}

		}

		//======================Delete Individual===============

		//======================Delete Success message==========

		function successdelete(){

			if($this->session->userdata('is_logged_in')){

			

			//Loading  Database

			$this->load->database();

			//Calling Model

			$this->load->model('video_model');

			//Transfering data to Model

			$query = $this->video_model->view_video();

			$data['ecms'] = $query;

			$data['title'] = "Individual Data List";

			$datamsg['h1title'] = 'Data Updated Successfully';

			$this->load->view('header',$data);

			$this->load->view('showvideo');

			$this->load->view('footer');

		

			}else{

				redirect('main');

			}

		}

  		//======================Delete Success message==========

		//======================Logout==========================

		public function Logout(){

        	$this->session->sess_destroy();

        	redirect('login');

    	}

		//======================Logout==========================

}



?>



