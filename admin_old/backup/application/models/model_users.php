<?php 

 class model_users extends CI_Model{

	public function can_log_in(){

		$this->db->where('UserName',$this->input->post('username'));

		$this->db->where('UserPassword',md5($this->input->post('password')));

		$query=$this->db->get('na_admin_detail');

		if($query->num_rows()==1){

			return true;

		}else{

			return false;

		}

	} 

	 

	 

	public function checkOldPass($old_password,$id){

		$id = $this->input->post('id');

		$this->db->where('UserName', $id);

		//$this->db->where('id', $id);

		$this->db->where('UserPassword', $old_password);

		$query = $this->db->get('na_admin_detail');

		if($query->num_rows() > 0)

			return 1;

		else

			return 0;

			print $this->db->last_query(); 

	}

	

	public function saveNewPass($new_pass,$id){

		$data = array(

			   'UserPassword' => $new_pass

			);

		$id = $this->input->post('id');

		$this->db->where('UserName', $id);

		$this->db->update('na_admin_detail', $data);

		return true;

		print $this->db->last_query();

	}

	

	

}







?>