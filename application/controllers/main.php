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

			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/index'));      
		}
    }

	public function surveyFrom1($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/private/surveyFrom1', $data);       
		}
    }

	public function surveyFrom2($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");	 

			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}


			$data['u_check_new_survey_knowledge_laws']=$this->chkHave($data['u_now_id'],'survey_knowledge_laws');
			if($data['u_check_new_survey_knowledge_laws'] == 0){
				$objdSurveyKnowledgeLaws=new MyDto();
				$objdSurveyKnowledgeLaws->profile_id = $profile_id;
				$objdSurveyKnowledgeLaws->S2_1_1  =  '';
				$objdSurveyKnowledgeLaws->S2_1_2  =  '';
				$objdSurveyKnowledgeLaws->S2_1_3  =  '';
				$objdSurveyKnowledgeLaws->S2_1_4  =  '';
				$objdSurveyKnowledgeLaws->S2_1_5  =  '';
				$objdSurveyKnowledgeLaws->S2_1_6  =  '';
				$objdSurveyKnowledgeLaws->S2_1_7  =  '';
				$objdSurveyKnowledgeLaws->S2_1_8  =  '';
				$objdSurveyKnowledgeLaws->S2_1_9  =  '';
				$objdSurveyKnowledgeLaws->S2_1_10  =  '';
				$objdSurveyKnowledgeLaws->S2_1_11  =  '';
				$objdSurveyKnowledgeLaws->S2_1_12  =  '';
				$objdSurveyKnowledgeLaws->S2_2_1  =  '';
				$objdSurveyKnowledgeLaws->S2_2_2  =  '';
				$objdSurveyKnowledgeLaws->S2_2_3  =  '';
				$objdSurveyKnowledgeLaws->S2_2_4  =  '';
				$objdSurveyKnowledgeLaws->S2_2_5  =  '';
				$objdSurveyKnowledgeLaws->S2_2_6  =  '';
				$objdSurveyKnowledgeLaws->S2_2_7  =  '';
				$objdSurveyKnowledgeLaws->S2_2_8  =  '';
				$objdSurveyKnowledgeLaws->S2_3_1  =  '';
				$objdSurveyKnowledgeLaws->S2_3_2  =  '';
				$objdSurveyKnowledgeLaws->S2_3_3  =  '';
				$objdSurveyKnowledgeLaws->S2_3_4  =  '';
				$objdSurveyKnowledgeLaws->S2_3_5  =  '';
				$objdSurveyKnowledgeLaws->S2_3_6  =  '';
				$objdSurveyKnowledgeLaws->S2_3_7  =  '';
				$objdSurveyKnowledgeLaws->S2_3_8  =  '';
				$objdSurveyKnowledgeLaws->S2_3_9  =  '';
				$objdSurveyKnowledgeLaws->S2_4  =  '';
				$objdSurveyKnowledgeLaws->S2_5  =  '';
				$data['d_surveyKnowledgeLaws']=$objdSurveyKnowledgeLaws;
			} else{
				$this->datamodel->sql="select * from survey_knowledge_laws where profile_id='$profile_id'";
				$data['d_surveyKnowledgeLaws']=$this->datamodel->first_row_data_sql();
			}   

	        $this->load->view('/private/surveyFrom2', $data);       
		}
    }

	public function surveyFrom3($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");	 

			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}


			$data['u_check_new_survey_panic_in_crimes']=$this->chkHave($data['u_now_id'],'survey_panic_in_crimes');
			if($data['u_check_new_survey_panic_in_crimes'] == 0){
				$objdSurveyPanicInCrimes=new MyDto();
				$objdSurveyPanicInCrimes->profile_id = $profile_id;
				$objdSurveyPanicInCrimes->S2_2_1_1  =  '';
				$objdSurveyPanicInCrimes->S2_2_1_2  =  '';
				$objdSurveyPanicInCrimes->S2_2_1_3  =  '';
				$objdSurveyPanicInCrimes->S2_2_1_4  =  '';

				$data['d_surveyPanicInCrimes']=$objdSurveyPanicInCrimes;
			} else{
				$this->datamodel->sql="select * from survey_panic_in_crimes where profile_id='$profile_id'";
				$data['d_surveyPanicInCrimes']=$this->datamodel->first_row_data_sql();
			}   


	        $this->load->view('/private/surveyFrom3', $data);       
		}
    }

	public function surveyFrom4($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");	 

			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}


			$data['u_check_new_survey_trust_for_security']=$this->chkHave($data['u_now_id'],'survey_trust_for_security');
			if($data['u_check_new_survey_trust_for_security'] == 0){
				$objdSurveyTrustForSecurity=new MyDto();
				$objdSurveyTrustForSecurity->profile_id = $profile_id;
				$objdSurveyTrustForSecurity->S2_2_1  =  '';
				$objdSurveyTrustForSecurity->S2_2_2  =  '';
				$objdSurveyTrustForSecurity->S2_2_3  =  '';

				$data['d_surveyTrustForSecurity']=$objdSurveyTrustForSecurity;
			} else{
				$this->datamodel->sql="select * from survey_trust_for_security where profile_id='$profile_id'";
				$data['d_surveyTrustForSecurity']=$this->datamodel->first_row_data_sql();
			}   


	        $this->load->view('/private/surveyFrom4', $data);       
		}
    }

	public function surveyFrom5($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");	 

			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}


			$data['u_check_new_survey_sdgs']=$this->chkHave($data['u_now_id'],'survey_sdgs');
			if($data['u_check_new_survey_sdgs'] == 0){
				$objdSurveySdgs=new MyDto();
				$objdSurveySdgs->profile_id = $profile_id;
				$objdSurveySdgs->S2_2_1  =  '';
				$objdSurveySdgs->S2_2_2  =  '';

				$data['d_surveySdgs']=$objdSurveySdgs;
			} else{
				$this->datamodel->sql="select * from survey_sdgs where profile_id='$profile_id'";
				$data['d_surveySdgs']=$this->datamodel->first_row_data_sql();
			} 

	        $this->load->view('/private/surveyFrom5', $data);       
		}
    }

    public function surveyFrom6($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");	 

			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}


			$data['u_check_new_survey_trust_in_justic']=$this->chkHave($data['u_now_id'],'survey_trust_in_justic');
			if($data['u_check_new_survey_trust_in_justic'] == 0){
				$objdSurveyTrustInJustic=new MyDto();
				$objdSurveyTrustInJustic->profile_id = $profile_id;
				$objdSurveyTrustInJustic->S2_1_1  =  '';
				$objdSurveyTrustInJustic->S2_1_2  =  '';
				$objdSurveyTrustInJustic->S2_1_3  =  '';
				$objdSurveyTrustInJustic->S2_1_4  =  '';
				$objdSurveyTrustInJustic->S2_2_1  =  '';
				$objdSurveyTrustInJustic->S2_2_2  =  '';
				$objdSurveyTrustInJustic->S2_2_3  =  '';
				$objdSurveyTrustInJustic->S2_2_4  =  '';
				$objdSurveyTrustInJustic->S2_3_1  =  '';
				$objdSurveyTrustInJustic->S2_3_2  =  '';
				$objdSurveyTrustInJustic->S2_3_3  =  '';
				$objdSurveyTrustInJustic->S2_3_4  =  '';
				$objdSurveyTrustInJustic->S2_4_1  =  '';
				$objdSurveyTrustInJustic->S2_4_2  =  '';
				$objdSurveyTrustInJustic->S2_4_3  =  '';
				$objdSurveyTrustInJustic->S2_4_4  =  '';
				$objdSurveyTrustInJustic->S2_5  =  '';
				$objdSurveyTrustInJustic->S3_1_1  =  '';
				$objdSurveyTrustInJustic->S3_1_2  =  '';
				$objdSurveyTrustInJustic->S3_1_3  =  '';
				$objdSurveyTrustInJustic->S3_1_4  =  '';
				$objdSurveyTrustInJustic->S3_1_5  =  '';
				$objdSurveyTrustInJustic->S3_2_1  =  '';
				$objdSurveyTrustInJustic->S3_2_2  =  '';
				$objdSurveyTrustInJustic->S3_2_3  =  '';
				$objdSurveyTrustInJustic->S3_2_4  =  '';
				$objdSurveyTrustInJustic->S3_2_5  =  '';
				$objdSurveyTrustInJustic->S3_3_1  =  '';
				$objdSurveyTrustInJustic->S3_3_2  =  '';
				$objdSurveyTrustInJustic->S3_3_3  =  '';
				$objdSurveyTrustInJustic->S3_3_4  =  '';
				$objdSurveyTrustInJustic->S3_3_5  =  '';
				$objdSurveyTrustInJustic->S3_4_1  =  '';
				$objdSurveyTrustInJustic->S3_4_2  =  '';
				$objdSurveyTrustInJustic->S3_4_3  =  '';
				$objdSurveyTrustInJustic->S3_4_4  =  '';
				$objdSurveyTrustInJustic->S3_4_5  =  '';
				$objdSurveyTrustInJustic->S3_5_1  =  '';
				$objdSurveyTrustInJustic->S3_5_2  =  '';
				$objdSurveyTrustInJustic->S3_5_3  =  '';
				$objdSurveyTrustInJustic->S3_5_4  =  '';
				$objdSurveyTrustInJustic->S3_5_5  =  '';
				$objdSurveyTrustInJustic->S3_6  =  '';

				$data['d_surveyTrustInJustic']=$objdSurveyTrustInJustic;
			} else{
				$this->datamodel->sql="select * from survey_trust_in_justic where profile_id='$profile_id'";
				$data['d_surveyTrustInJustic']=$this->datamodel->first_row_data_sql();
			}
			
			
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
			$data['u_send_profile']=$profile_id;
			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
			}else{
				$data['u_now_id']=$profile_id;
			}

			$data['u_check_new_survey_profile']=$this->chkHave($data['u_now_id'],'survey_profile');
			if($data['u_check_new_survey_profile'] == 0){
				$objSurveyProfile=new MyDto();
				$objSurveyProfile->profile_id = $profile_id;
				$objSurveyProfile->master_id = '';
				$objSurveyProfile->A2 = '';
				$objSurveyProfile->A3_1 = '';
				$objSurveyProfile->A3_2 = '';
				$objSurveyProfile->A4 = '';
				$objSurveyProfile->A4_1 = '';
				$objSurveyProfile->A4_2 = '';
				$objSurveyProfile->A4_3 = '';
				$objSurveyProfile->A4_4 = '';
				$objSurveyProfile->A4_5 = '';
				$objSurveyProfile->{'1_1_1'} = '';
				$objSurveyProfile->{'1_1_2'} = '';
				$objSurveyProfile->{'1_1_3'} = '';
				$objSurveyProfile->{'1_1_4'} = '';
				$objSurveyProfile->{'1_1_4_text'} = '';
				$objSurveyProfile->{'1_1_5'} = '';
				$objSurveyProfile->{'1_1_5_text'} = '';
				$objSurveyProfile->{'1_1_6'} = '';
				$objSurveyProfile->{'1_2'} = '';
				$objSurveyProfile->{'1_2_text'} = '';
				$objSurveyProfile->{'1_3'} = '';
				$objSurveyProfile->{'1_3_text'} = '';
				$data['d_surveyProfile']=$objSurveyProfile;
			}else{
				$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id'";
				$data['d_surveyProfile']=$this->datamodel->first_row_data_sql();
			}

			
		
		}
		$this->load->view('/private/survey', $data);       
	}

	public function saveSurvey(){
		$user_name=$this->isLogin();
		if($user_name != false){    
			$profileId = $this->input->post('1_TEXT');
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
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
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}	
			
			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyKnowledgeLaws=new MyDto();
			$objdSurveyKnowledgeLaws->profile_id = $profileId;
			$objdSurveyKnowledgeLaws->S2_1_1 = $this->input->post('2_S2_1_1');
			$objdSurveyKnowledgeLaws->S2_1_2 = $this->input->post('2_S2_1_2');
			$objdSurveyKnowledgeLaws->S2_1_3 = $this->input->post('2_S2_1_3');
			$objdSurveyKnowledgeLaws->S2_1_4 = $this->input->post('2_S2_1_4');
			$objdSurveyKnowledgeLaws->S2_1_5 = $this->input->post('2_S2_1_5');
			$objdSurveyKnowledgeLaws->S2_1_6 = $this->input->post('2_S2_1_6');
			$objdSurveyKnowledgeLaws->S2_1_7 = $this->input->post('2_S2_1_7');
			$objdSurveyKnowledgeLaws->S2_1_8 = $this->input->post('2_S2_1_8');
			$objdSurveyKnowledgeLaws->S2_1_9 = $this->input->post('2_S2_1_9');
			$objdSurveyKnowledgeLaws->S2_1_10 = $this->input->post('2_S2_1_10');
			$objdSurveyKnowledgeLaws->S2_1_11 = $this->input->post('2_S2_1_11');
			$objdSurveyKnowledgeLaws->S2_1_12 = $this->input->post('2_S2_1_12');
			$objdSurveyKnowledgeLaws->S2_2_1 = $this->input->post('2_S2_2_1');
			$objdSurveyKnowledgeLaws->S2_2_2 = $this->input->post('2_S2_2_2');
			$objdSurveyKnowledgeLaws->S2_2_3 = $this->input->post('2_S2_2_3');
			$objdSurveyKnowledgeLaws->S2_2_4 = $this->input->post('2_S2_2_4');
			$objdSurveyKnowledgeLaws->S2_2_5 = $this->input->post('2_S2_2_5');
			$objdSurveyKnowledgeLaws->S2_2_6 = $this->input->post('2_S2_2_6');
			$objdSurveyKnowledgeLaws->S2_2_7 = $this->input->post('2_S2_2_7');
			$objdSurveyKnowledgeLaws->S2_2_8 = $this->input->post('2_S2_2_8');
			$objdSurveyKnowledgeLaws->S2_3_1 = $this->input->post('2_S2_3_1');
			$objdSurveyKnowledgeLaws->S2_3_2 = $this->input->post('2_S2_3_2');
			$objdSurveyKnowledgeLaws->S2_3_3 = $this->input->post('2_S2_3_3');
			$objdSurveyKnowledgeLaws->S2_3_4 = $this->input->post('2_S2_3_4');
			$objdSurveyKnowledgeLaws->S2_3_5 = $this->input->post('2_S2_3_5');
			$objdSurveyKnowledgeLaws->S2_3_6 = $this->input->post('2_S2_3_6');
			$objdSurveyKnowledgeLaws->S2_3_7 = $this->input->post('2_S2_3_7');
			$objdSurveyKnowledgeLaws->S2_3_8 = $this->input->post('2_S2_3_8');
			$objdSurveyKnowledgeLaws->S2_3_9 = $this->input->post('2_S2_3_9');
			$objdSurveyKnowledgeLaws->S2_4 = $this->input->post('2_S2_4');
			$objdSurveyKnowledgeLaws->S2_5 = $this->input->post('2_S2_5');
			if($this->chkHave($profileId,'survey_knowledge_laws') == 0){
				$this->datamodel->insert($objdSurveyKnowledgeLaws);
			}else{
				$this->datamodel->update($objdSurveyKnowledgeLaws);
			}	

			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyPanicInCrimes=new MyDto();
			$objdSurveyPanicInCrimes->profile_id = $profileId;
			$objdSurveyPanicInCrimes->S2_2_1_1 = $this->input->post('3_S2_2_1_1');
			$objdSurveyPanicInCrimes->S2_2_1_2 = $this->input->post('3_S2_2_1_2');
			$objdSurveyPanicInCrimes->S2_2_1_3 = $this->input->post('3_S2_2_1_3');
			$objdSurveyPanicInCrimes->S2_2_1_4 = $this->input->post('3_S2_2_1_4');
	
			if($this->chkHave($profileId,'survey_panic_in_crimes') == 0){
				$this->datamodel->insert($objdSurveyPanicInCrimes);
			}else{
				$this->datamodel->update($objdSurveyPanicInCrimes);
			}	


			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustForSecurity=new MyDto();
			$objdSurveyTrustForSecurity->profile_id = $profileId;
			$objdSurveyTrustForSecurity->S2_2_1 = $this->input->post('4_S2_2_1');
			$objdSurveyTrustForSecurity->S2_2_2 = $this->input->post('4_S2_2_2');
			$objdSurveyTrustForSecurity->S2_2_3 = $this->input->post('4_S2_2_3');
	
			if($this->chkHave($profileId,'survey_trust_for_security') == 0){
				$this->datamodel->insert($objdSurveyTrustForSecurity);
			}else{
				$this->datamodel->update($objdSurveyTrustForSecurity);
			}

			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveySdgs=new MyDto();
			$objdSurveySdgs->profile_id = $profileId;
			$objdSurveySdgs->S2_2_1 = $this->input->post('5_S2_2_1');
			$objdSurveySdgs->S2_2_2 = $this->input->post('5_S2_2_2');
	
			if($this->chkHave($profileId,'survey_sdgs') == 0){
				$this->datamodel->insert($objdSurveySdgs);
			}else{
				$this->datamodel->update($objdSurveySdgs);
			}

			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustInJustic=new MyDto();
			$objdSurveyTrustInJustic->profile_id = $profileId;
			$objdSurveyTrustInJustic->S2_1_1 = $this->input->post('6_S2_1_1');
			$objdSurveyTrustInJustic->S2_1_2 = $this->input->post('6_S2_1_2');
			$objdSurveyTrustInJustic->S2_1_3 = $this->input->post('6_S2_1_3');
			$objdSurveyTrustInJustic->S2_1_4 = $this->input->post('6_S2_1_4');
			$objdSurveyTrustInJustic->S2_2_1 = $this->input->post('6_S2_2_1');
			$objdSurveyTrustInJustic->S2_2_2 = $this->input->post('6_S2_2_2');
			$objdSurveyTrustInJustic->S2_2_3 = $this->input->post('6_S2_2_3');
			$objdSurveyTrustInJustic->S2_2_4 = $this->input->post('6_S2_2_4');
			$objdSurveyTrustInJustic->S2_3_1 = $this->input->post('6_S2_3_1');
			$objdSurveyTrustInJustic->S2_3_2 = $this->input->post('6_S2_3_2');
			$objdSurveyTrustInJustic->S2_3_3 = $this->input->post('6_S2_3_3');
			$objdSurveyTrustInJustic->S2_3_4 = $this->input->post('6_S2_3_4');
			$objdSurveyTrustInJustic->S2_4_1 = $this->input->post('6_S2_4_1');
			$objdSurveyTrustInJustic->S2_4_2 = $this->input->post('6_S2_4_2');
			$objdSurveyTrustInJustic->S2_4_3 = $this->input->post('6_S2_4_3');
			$objdSurveyTrustInJustic->S2_4_4 = $this->input->post('6_S2_4_4');
			$objdSurveyTrustInJustic->S2_5 = $this->input->post('6_S2_5');
			$objdSurveyTrustInJustic->S3_1_1 = $this->input->post('6_S3_1_1');
			$objdSurveyTrustInJustic->S3_1_2 = $this->input->post('6_S3_1_2');
			$objdSurveyTrustInJustic->S3_1_3 = $this->input->post('6_S3_1_3');
			$objdSurveyTrustInJustic->S3_1_4 = $this->input->post('6_S3_1_4');
			$objdSurveyTrustInJustic->S3_1_5 = $this->input->post('6_S3_1_5');
			$objdSurveyTrustInJustic->S3_2_1 = $this->input->post('6_S3_2_1');
			$objdSurveyTrustInJustic->S3_2_2 = $this->input->post('6_S3_2_2');
			$objdSurveyTrustInJustic->S3_2_3 = $this->input->post('6_S3_2_3');
			$objdSurveyTrustInJustic->S3_2_4 = $this->input->post('6_S3_2_4');
			$objdSurveyTrustInJustic->S3_2_5 = $this->input->post('6_S3_2_5');
			$objdSurveyTrustInJustic->S3_3_1 = $this->input->post('6_S3_3_1');
			$objdSurveyTrustInJustic->S3_3_2 = $this->input->post('6_S3_3_2');
			$objdSurveyTrustInJustic->S3_3_3 = $this->input->post('6_S3_3_3');
			$objdSurveyTrustInJustic->S3_3_4 = $this->input->post('6_S3_3_4');
			$objdSurveyTrustInJustic->S3_3_5 = $this->input->post('6_S3_3_5');
			$objdSurveyTrustInJustic->S3_4_1 = $this->input->post('6_S3_4_1');
			$objdSurveyTrustInJustic->S3_4_2 = $this->input->post('6_S3_4_2');
			$objdSurveyTrustInJustic->S3_4_3 = $this->input->post('6_S3_4_3');
			$objdSurveyTrustInJustic->S3_4_4 = $this->input->post('6_S3_4_4');
			$objdSurveyTrustInJustic->S3_4_5 = $this->input->post('6_S3_4_5');
			$objdSurveyTrustInJustic->S3_5_1 = $this->input->post('6_S3_5_1');
			$objdSurveyTrustInJustic->S3_5_2 = $this->input->post('6_S3_5_2');
			$objdSurveyTrustInJustic->S3_5_3 = $this->input->post('6_S3_5_3');
			$objdSurveyTrustInJustic->S3_5_4 = $this->input->post('6_S3_5_4');
			$objdSurveyTrustInJustic->S3_5_5 = $this->input->post('6_S3_5_5');
			$objdSurveyTrustInJustic->S3_6 = $this->input->post('6_S3_6');

	
			if($this->chkHave($profileId,'survey_trust_in_justic') == 0){
				$this->datamodel->insert($objdSurveyTrustInJustic);
			}else{
				$this->datamodel->update($objdSurveyTrustInJustic);
			}
			
			
			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/index'),$objProfile);	

		} 
    }

	public function saveSurvey1S3(){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
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
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}

		} 
    }

	public function saveSurvey1($profileId,$masterId,$loop){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyVictims=new MyDto();
			$objdSurveyVictims->profile_id = $profileId;
			$objdSurveyVictims->S2_2_1 = $this->input->post('5_S2_2_1');
			$objdSurveyVictims->S2_2_2 = $this->input->post('5_S2_2_2');
	
			if($this->chkHave($profileId,'survey_victims') == 0){
				$this->datamodel->insert($objdSurveyVictims);
			}else{
				$this->datamodel->update($objdSurveyVictims);
			}

		} 
    }

	public function saveSurvey1S4($profileId,$masterId,$loop){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyVictimsCrimes=new MyDto();
			$objdSurveyVictimsCrimes->profile_id = $profileId;
			$objdSurveyVictimsCrimes->S2_2_1 = $this->input->post('5_S2_2_1');
			$objdSurveyVictimsCrimes->S2_2_2 = $this->input->post('5_S2_2_2');
	
			if($this->chkHave($profileId,'survey_victims_crimes') == 0){
				$this->datamodel->insert($objdSurveyVictimsCrimes);
			}else{
				$this->datamodel->update($objdSurveyVictimsCrimes);
			}

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

	function chkHave($profile_id,$table_name){				
		$user_name=$this->isLogin();
		$count = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->table_name=$table_name;
			$this->datamodel->condition='where profile_id='.$profile_id; 
			$count=$this->datamodel->list_data_count();
		}
		return $count;
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
