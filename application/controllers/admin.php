<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }
    public function index() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		
			$data['h_back']="";    	        

	        $this->load->view('/private/admin', $data);	        
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
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";
			$data['h_back']="";		    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='new_user';
			$this->datamodel->condition=" where 1=1";		
			$list_user=$this->datamodel->list_data();
			$data['list_user']=$list_user;

	        $this->load->view('/private/addMember', $data);        
		}
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



     public function editUser(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='new_user';
			$this->datamodel->pk_name='id';
			$this->datamodel->pk_value=$this->input->post('id');
			$obj=new MyDto();
			$obj->username=$this->input->post('username');
			$obj->password=$this->input->post('password');
			$obj->level=$this->input->post('level');
			$obj->name=$this->input->post('name');
			$obj->surname=$this->input->post('surname');
			$obj->email=$this->input->post('email');
			$obj->mobile=$this->input->post('mobile');

			$this->datamodel->update($obj);					
	        $this->functionhelper->jsonHeader();
	        $this->functionhelper->jsonResponseFormData('บันทึกข้อมูลเรียบร้อยแล้ว', '', '',$obj);		

			//$this->load->view('/private/addMember');
		}   
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
    
}
