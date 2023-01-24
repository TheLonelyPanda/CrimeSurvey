<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class Main extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }

	public function profileTo($profile_id) {
		$this->session->set_userdata('p_am_id',$profile_id);
		$this->profile();
	}	

    public function profile() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$profile_id=$this->session->userdata('p_am_id');
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";
			$data['h_back']="main/index";
			
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_profile1';
			$this->datamodel->pk_name='code_id';
			$this->datamodel->pk_value=$profile_id;		
			$obj=$this->datamodel->load();			
			//check invalid family			
			if($obj->user_id !=$this->session->userdata('u_am_id') ){
			 	$this->index();
			}else{
				$data['obj']=$obj;
		        $this->load->view('/include/layout_header',$data);
		        $this->load->view('/private/profile', $data);
		        $this->load->view('/include/layout_footer');	        				
			}
		}
    }


    public function index() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		
			$data['h_back']="";    	        

	        $this->load->view('/private/index', $data);	        
		}
    }
    public function survey() {
		//$user_name=$this->is_login();
		//if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/survey', $data);       
		//}
    }
    
    public function addMember() {
		//$user_name=$this->isLogin();
		//if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";
			$data['h_back']="";		    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='new_user';
			$this->datamodel->condition=" where 1=1";		
			$list_user=$this->datamodel->list_data();
			$data['list_user']=$list_user;

	        $this->load->view('/private/addMember', $data);        
		//}
    }    

	public function export() {
		//$user_name=$this->is_login();
		//if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/export', $data);       
		//}
    }

	function isLogin(){				
		$user_name=$this->session->userdata('user_name');
		if($user_name==''){				
			redirect('/user/login');
			return false;
		}else{			
			return $user_name;
		}
	}

	public function submitLogout(){
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('u_am_id');
		$this->session->unset_userdata('p_am_id');
		$this->session->unset_userdata('u_am_name');
		$this->session->unset_userdata('u_level');
		$this->session->unset_userdata('master_id');
		$this->session->unset_userdata('topic_id');						
		$this->functionhelper->jsonHeader();
        $this->functionhelper->jsonResponseFormSuccess('ออกจากระบบเรียบร้อยแล้ว', 'ท่านได้ออกจากระบบเรียบร้อยแล้ว', '',site_url('user/login'));		
	}
    
}
