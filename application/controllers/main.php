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


    public function index() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');		
			$data['u_level']=$this->session->userdata('u_level');				
			$data['h_flag']="list";		
			$data['h_back']="";    	    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->condition=" where master_id is null";		
			$list_data=$this->datamodel->list_data();
			$data['list_data']=$list_data;

	        $this->load->view('/private/index', $data);	        
		}
    }

	public function deleteData($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember";  	        
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();
			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/index'));      
		}
    }

	public function surveyFrom1() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom1', $data);       
		}
    }

	public function surveyFrom2() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom2', $data);       
		}
    }

	public function surveyFrom3() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom3', $data);       
		}
    }

	public function surveyFrom4() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom4', $data);       
		}
    }

	public function surveyFrom5() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom5', $data);       
		}
    }

    public function surveyFrom6() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom6', $data);       
		}
    }

	public function survey($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
			$this->datamodel->sql=" select * from provinces ";   
			$data['d_province']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from districts ";   
			$data['d_districts']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from amphures ";   
			$data['d_amphures']=$this->datamodel->list_data_sql();
			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
				$obj=new MyDto();
				$obj->profile_id = $profile_id;
				$obj->master_id = '';
				$obj->A2 = '';
				$obj->A3_1 = '';
				$obj->A3_2 = '';
				$obj->A4 = '';
				$obj->A4_1 = '';
				$obj->A4_2 = '';
				$obj->A4_3 = '';
				$obj->A4_4 = '';
				$obj->A4_5 = '';
				$obj->{'1_1_1'} = '';
				$obj->{'1_1_2'} = '';
				$obj->{'1_1_3'} = '';
				$obj->{'1_1_4'} = '';
				$obj->{'1_1_4_text'} = '';
				$obj->{'1_1_5'} = '';
				$obj->{'1_1_5_text'} = '';
				$obj->{'1_1_6'} = '';
				$obj->{'1_2'} = '';
				$obj->{'1_2_text'} = '';
				$obj->{'1_3'} = '';
				$obj->{'>1_3_text'} = '';

				$data['d_surveyProfile']=$obj;
			}else{
				$data['u_now_id']=$profile_id;
				$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id'";
				$data['d_surveyProfile']=$this->datamodel->first_row_data_sql();	
			}

	        $this->load->view('/private/survey', $data);       
		}
    }

	public function saveSurvey(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$this->input->post('1_TEXT');
			$objProfile=new MyDto();
			$objProfile->A2 = $this->input->post('A2');
			$objProfile->A3_1 = $this->input->post('A3_1');
			$objProfile->A3_2 = $this->input->post('A3_2');
			$objProfile->A4 = $this->input->post('A4');
			if($this->input->post('A4')=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->input->post('amphure_id_1');
				$objProfile->A4_3 = $this->input->post('district_id_1');
				$objProfile->A4_4 = $this->input->post('A4_1_TEXT_3');
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->input->post('province_id');
				$objProfile->A4_2 = $this->input->post('amphure_id');
				$objProfile->A4_3 = $this->input->post('district_id');
				$objProfile->A4_4 = $this->input->post('A4_2_TEXT_4');
				$objProfile->A4_5 = $this->input->post('A4_2_TEXT_5');
			}
			$objProfile->{'1_1_1'} = $this->input->post('1_1_1');
			$objProfile->{'1_1_2'} = $this->input->post('1_1_2');
			$objProfile->{'1_1_3'} = $this->input->post('1_1_3');
			$objProfile->{'1_1_4'} = $this->input->post('1_1_4');
			$objProfile->{'1_1_4_text'} = $this->input->post('1_1_4_TEXT');
			$objProfile->{'1_1_5'} = $this->input->post('1_1_5');
			$objProfile->{'1_1_5_text'} = $this->input->post('1_1_5_TEXT');
			$objProfile->{'1_1_6'} = $this->input->post('1_1_6');
			$objProfile->{'1_2'} = $this->input->post('1_2');
			$objProfile->{'1_2_text'} = $this->input->post('1_2_TEXT');
			$objProfile->{'1_3'} = $this->input->post('1_3');
			$objProfile->{'1_3_text'} = $this->input->post('1_3_TEXT');


			$this->datamodel->update($objProfile);					
	        $this->functionhelper->jsonHeader();
	        $this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/index'),$objProfile);		

		} 
    }
       

	public function export() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/export', $data);       
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
