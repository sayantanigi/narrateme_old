<?php
class Level extends CI_Controller {
		//============Constructor to call Model====================
		function __construct() {
			parent::__construct();
			$this->load->library(array('form_validation','session'));
			if($this->session->userdata('is_logged_in')!=1){
			redirect('supercontrol/home', 'refresh');
			}
			$this->load->model('supercontrol/level_model');
			$this->load->library('image_lib');
			$this->load->database();
			
				//****************************backtrace prevent*** START HERE*************************
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
            $this->output->set_header('Pragma: no-cache');
			
			//****************************backtrace prevent*** END HERE*************************
		}
		//============Constructor to call Model====================
		function index(){
		if($this->session->userdata('is_logged_in')){
			redirect('supercontrol/mode/mode_add_form');
			///supercontrol/mode_add_form
        }else{
        	$this->load->view('supercontrol/login');	
        }
		
		
	}
//======================Show Add form for mode add **** START HERE========================	
function mode_add_form(){
				$data['title'] = "Add Mode";
				$this->load->view('supercontrol/header',$data);
				$this->load->view('supercontrol/modeadd_view');
				$this->load->view('supercontrol/footer');
     }
		
//====================== Show Add form for mode add ****END HERE========================
		//=======================Insert Page Data============
		function add_mode(){
			$my_date = date("Y-m-d", time()); 
			$config = array(
			'upload_path' => "uploads/mode/",
			'upload_url' => base_url() . "uploads/mode/",
			'allowed_types' => "gif|jpg|png|jpeg"
			);
        	$this->load->library('upload', $config);
				//=====================+++++++++++++++++++++++===================
				$this->form_validation->set_rules('mode_title','News Title', 'required');
				$this->form_validation->set_rules('posted_by', 'Posted By', 'required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules('mode_desc', 'mode Description', 'required|min_length[1]|max_length[100000]');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				//=====================+++++++++++++++++++++++===================
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('supercontrol/header');
					$data['success_msg'] = '<div class="alert alert-success text-center">Some Fields Can Not Be Blank</div>';
					$this->load->view('supercontrol/header');
            		$this->load->view('supercontrol/modeadd_view',$data);
					$this->load->view('supercontrol/footer');
					//redirect('banner/addbanner',$data);
				}else{
					if (!$this->upload->do_upload('userfile')){
            			$data['success_msg'] = '<div class="alert alert-success text-center">You Must Select An Image File!</div>';
						$this->load->view('supercontrol/header');
            			$this->load->view('supercontrol/modeadd_view', $data);
						$this->load->view('supercontrol/footer');
        			}else{
						 $data['userfile'] = $this->upload->data();
						 $filename=$data['userfile']['file_name'];
						 $data = array(
							'mode_title' => $this->input->post('mode_title'),
							'posted_by' => $this->input->post('posted_by'),
							'mode_image' => $filename,
							'mode_desc' => $this->input->post('mode_desc'),
							'date' => $my_date,
							'mode_status' => 1
						);
						$this->mode_model->insert_mode($data);
            			$upload_data = $this->upload->data();
						$query = $this->mode_model->show_mode();
						$data['ecms'] = $query;
            			$data['success_msg'] = '<div class="alert alert-success text-center"> Data successfully inserted!!!</div>';
						$this->load->view('supercontrol/header',$data);
						$this->load->view('supercontrol/showmodelist',$data);
						$this->load->view('supercontrol/footer');
				
					}
				}
		}
		//=======================Insert Page Data============
function view_mode($id) {
			 $id = $this->uri->segment(4); 
			//exit();
			$data['title'] = "Edit mode";
			//Loading Database
			$this->load->database();
			//Calling Model
			$this->load->model('supercontrol/mode_model');
			//Transfering data to Model
			$query = $this->mode_model->show_mode_id($id);
			$data['ecms'] = $query;
			$this->load->view('supercontrol/header',$data);
			$this->load->view('supercontrol/mode_view', $data);
			$this->load->view('supercontrol/footer');
		}
//=======================Insertion Success message for News *** START HERE=========
		function success(){
			$data['h1title'] = 'Add Mode';
			
			$data['title'] = 'Add Mode';
			$this->load->view('supercontrol/header');
			$this->load->view('supercontrol/modeadd_view',$data);
			$this->load->view('supercontrol/footer');
		}
//=======================Insertion Success message *** END HERE=========	
//======================Show News List **** START HERE========================
		function show_level(){
		//Loading Database
			$this->load->database();
			//Calling Model
			$this->load->model('supercontrol/level_model');
			//Transfering data to Model
			$query = $this->level_model->show_mode();
			$data['ecms'] = $query;
			$data['title'] = "Level List";
			$this->load->view('supercontrol/header',$data);
			$this->load->view('supercontrol/showlevellist');
			$this->load->view('supercontrol/footer');
		
	}
//======================Show News List **** END HERE========================
//======================Status change **** START HERE========================
	function statusmode ()
		{
			     $stat= $this->input->get('stat'); 
				 $id= $this->input->get('id');   
		$this->load->model('supercontrol/level_model');
		$this->level_model->updt($stat,$id);
		}

//=======================Status change **** END HERE========================	
//================Show Individual by Id for News *** START HERE=================
		function show_mode_id($id) {
			 $id = $this->uri->segment(4); 
			
			$data['title'] = "Edit mode";
			$this->load->database();
			$this->load->model('supercontrol/level_model');
			$query = $this->level_model->show_mode_id($id);
			$data['ecms'] = $query;
			$this->load->view('supercontrol/header',$data);
			$this->load->view('supercontrol/level_edit', $data);
			$this->load->view('supercontrol/footer');
		}
		
//================Show Individual by Id for News *** END HERE=================
//================Update Individual mode***** START HERE ====================
		function edit_level(){

				$datalist = array(			
					'level_title' => $this->input->post('level_title'),
				    'posted_by' => $this->input->post('posted_by')
				);
				$id = $this->input->post('id');
				$data['title'] = "Level Edit";
				//loading database
				$this->load->database();
				//Calling Model
				$this->load->model('supercontrol/level_model');
				//Transfering data to Model
				$query = $this->level_model->mode_edit($id,$datalist);
				//echo $ddd=$this->db->last_query();
				//exit();
				$data1['message'] = '<div class="alert alert-success text-center"> Data successfully uploaded!!!</div>';
				$query = $this->level_model->show_modelist();
				$data['ecms'] = $query;
				$data['title'] = "Level Page List";
				$this->load->view('supercontrol/header',$data);
				$this->load->view('supercontrol/showlevellist', $data1);
				$this->load->view('supercontrol/footer');
			
			
		}
//================Update Individual  News ***** END HERE====================

		//=====================DELETE NEWS====================

		
			function delete_mode() {
			$id = $this->uri->segment(4);
			$result=$this->mode_model->show_mode_id($id);
			$mode_image=$result[0]->mode_image; 
			$query = $this->mode_model->delete_mode($id,$mode_image);
			
	        $query = $this->mode_model->show_modelist();
			$data['ecms'] = $query;
			$data['title'] = "mode Page List";
			$this->session->set_flashdata('success_delete', 'Mode Deleted Successfully !!!');
			redirect('supercontrol/mode/show_mode',TRUE);
		}

		//=====================DELETE NEWS====================

		//====================MULTIPLE DELETE=================
		function delete_multiple(){
		$ids = ( explode( ',', $this->input->get_post('ids') ));
		$this->mode_model->delete_mul($ids);
		$data4['msg1'] = '<div class="alert alert-success text-center"> Data successfully delete!!!</div>';
		$this->load->view('supercontrol/header');
		redirect('supercontrol/mode/show_mode',$data4);
		$this->load->view('supercontrol/footer');
		}
		//====================MULTIPLE DELETE=================
//======================Logout==========================
		public function Logout(){
        	$this->session->sess_destroy();
        	redirect('supercontrol/login');
    	}
//======================Logout==========================
}

?>