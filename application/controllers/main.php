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

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='master_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='master_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/index'));      
		}
    }

	public function deleteVictims($profile_id,$back_profile) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember"; 
			
			$this->saveSurvey('true');
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/survey/'.$back_profile));      
		}
    }

	public function surveyFrom1($profile_id) {
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


			$data['u_check_new_survey_victims']=$this->chkHave($data['u_now_id'],'survey_victims');
			if($data['u_check_new_survey_victims'] == 0){
				$objdSurveyVictims=new MyDto();
				$objdSurveyVictims->profile_id = $profile_id;
				$objdSurveyVictims->S2_1  =  '';
				$objdSurveyVictims->S2_2  =  '';
				$objdSurveyVictims->S2_3  =  '';
				$objdSurveyVictims->S2_4  =  '';

				$data['d_surveyVictims']=$objdSurveyVictims;
				$objdSurveyVictims->master_id = '';
				$data['d_surveyVictimslist']=$objdSurveyVictims;
			} else{
				$this->datamodel->sql="select * from survey_victims where profile_id='$profile_id'";
				$data['d_surveyVictims']=$this->datamodel->first_row_data_sql();

				$this->datamodel->sql="select * from survey_victims where master_id='$profile_id'";
				$data['d_surveyVictimslist']=$this->datamodel->list_data_sql();
			}

			$data['u_check_new_survey_profile_victim']=$this->chkHave($data['u_now_id'],'survey_profile');
			if($data['u_check_new_survey_profile_victim'] == 0){
				$objSurveyProfile=new MyDto();
				$objSurveyProfile->profile_id = $profile_id;
				$objSurveyProfile->{'1_1_1'} = '';
				$objSurveyProfile->{'1_1_2'} = '';
				$objSurveyProfile->{'1_1_3'} = '';
				$objSurveyProfile->{'1_1_4'} = '';
				$objSurveyProfile->{'1_1_4_text'} = '';
				$objSurveyProfile->{'1_1_5'} = '';
				$objSurveyProfile->{'1_1_5_text'} = '';
				$objSurveyProfile->{'1_1_6'} = '';
				$data['d_surveyProfile_victim']=$objSurveyProfile;
			}else{
				$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id'";
				$data['d_surveyProfile_victim']=$this->datamodel->first_row_data_sql();

				$this->datamodel->sql="select * from survey_profile where master_id='$profile_id'";
				$data['d_surveyProfile_victimlist']=$this->datamodel->list_data_sql();
			}

			$data['u_check_new_survey_victims_crimes']=$this->chkHave($data['u_now_id'],'survey_victims');
			if($data['u_check_new_survey_victims_crimes'] == 0){
				$objdSurveyVictimsCrimes=new MyDto();
				$objdSurveyVictimsCrimes->profile_id = $profile_id;
				$objdSurveyVictimsCrimes->S4_4_1  =  '';
				$objdSurveyVictimsCrimes->S4_4_1_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_2  =  '';
				$objdSurveyVictimsCrimes->S4_4_2_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_3  =  '';
				$objdSurveyVictimsCrimes->S4_4_3_1  =  '';
				$objdSurveyVictimsCrimes->S4_4_3_2  =  '';
				$objdSurveyVictimsCrimes->S4_4_3_2_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_3_3  =  '';
				$objdSurveyVictimsCrimes->S4_4_3_3_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_1  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_2  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_3  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_4  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_5  =  '';
				$objdSurveyVictimsCrimes->S4_4_4_6  =  '';
				$objdSurveyVictimsCrimes->S4_4_5  =  '';
				$objdSurveyVictimsCrimes->S4_4_6  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_1  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_1_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_1  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_2  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_3  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_4  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_5  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_6  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_7  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_8  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_9  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_10  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_11  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_12  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_13  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_14  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_15  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_16  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_17  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_18  =  '';
				$objdSurveyVictimsCrimes->S4_4_6_2_18_text  =  '';
				$objdSurveyVictimsCrimes->S4_4_7  =  '';
				$objdSurveyVictimsCrimes->S4_4_7_text  =  '';


				$data['d_surveyVictimsCrimes']=$objdSurveyVictimsCrimes;
			} else{
				$this->datamodel->sql="select * from survey_victims_crimes where profile_id='$profile_id'";
				$data['d_surveyVictimsCrimes']=$this->datamodel->first_row_data_sql();

				$this->datamodel->sql="select * from survey_victims_crimes where master_id='$profile_id'";
				$data['d_surveyVictimsCrimeslist']=$this->datamodel->list_data_sql();
			}

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
			
			if ($profile_id == '0') {
				$this->initData($data['u_now_id']);
			}

			
		
		}
		$this->load->view('/private/survey', $data);       
	}

	public function initData($u_now_id){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$u_now_id;
			$objProfile=new MyDto();
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3_1 = $this->checkEmpty($this->input->post('A3_1'));
			$objProfile->A3_2 = $this->checkEmpty($this->input->post('A3_2'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			if($this->chkHave($u_now_id,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}	
			$objlist=new MyDto();
			$objlist->running_num = 0;
			$objlist->profile_id = $u_now_id;
			$this->saveSurvey1($u_now_id,1,$objlist);
			$this->saveSurvey1S4(1,$objlist);
			$this->saveSurvey2($u_now_id);
			$this->saveSurvey3($u_now_id);
			$this->saveSurvey4($u_now_id);
			$this->saveSurvey5($u_now_id);
			$this->saveSurvey6($u_now_id);

		} 
    }
	public function checkEmpty($string){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			if($string != '99'){
				if($string == '0'||$string == null){
					return '';
				}
			}
		}
		return $string;
	}

	public function saveSurvey($hidden){
		$user_name=$this->isLogin();
		if($user_name != false){    
			$profileId = $this->input->post('1_text');
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3_1 = $this->checkEmpty($this->input->post('A3_1'));
			$objProfile->A3_2 = $this->checkEmpty($this->input->post('A3_2'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}	

			$objlist=new MyDto();
			$objlist->running_num = 0;
			$objlist->profile_id = $profileId;
			$this->saveSurvey1($profileId,1,$objlist);
			$this->saveSurvey1S4(1,$objlist);

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->condition='where master_id='.$profileId; 
			$listData=$this->datamodel->list_data();

			for ($i=2; $i <= count($listData)+1; $i++) { 
				$this->saveSurvey1($profileId,$i,$listData[$i-2]);
				$this->saveSurvey1S3($i,$listData[$i-2]);
				$this->saveSurvey1S4($i,$listData[$i-2]);
			}
			$this->saveSurvey2($profileId);
			$this->saveSurvey3($profileId);
			$this->saveSurvey4($profileId);
			$this->saveSurvey5($profileId);
			$this->saveSurvey6($profileId);
			
			if($hidden != 'true'){
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/index'),$objProfile);	
			}
			

		} 
    }

	public function saveSurvey1($profileId,$loop,$list){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$master_id = 'IS NULL';
			$objdSurveyVictims=new MyDto();
			if($loop!=1){
				if($list->running_num != 0){
					$profileId = $list->profile_id;
					$master_id = $list->master_id;
					$objdSurveyVictims->master_id = $list->master_id;
					$objdSurveyVictims->profile_id = $list->profile_id;
				}else{
					$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
					$u_now_id=$this->datamodel->first_row_data_sql();
					$newProfileId=$u_now_id->AUTO_INCREMENT;
					$master_id = $profileId;
					$objdSurveyVictims->master_id = $profileId;
					$objdSurveyVictims->profile_id = $newProfileId;

					$this->initSurvey1S3($newProfileId,$master_id);
				}
			
			}else{
				$objdSurveyVictims->profile_id = $profileId;
			}
			$objdSurveyVictims->S2_1 = $this->checkEmpty($this->input->post('1_S2_'.$loop.'_1'));
			$objdSurveyVictims->S2_2 = $this->checkEmpty($this->input->post('1_S2_'.$loop.'_2'));
			$objdSurveyVictims->S2_3 = $this->checkEmpty($this->input->post('1_S2_'.$loop.'_3'));
			$objdSurveyVictims->S2_4 = $this->checkEmpty($this->input->post('1_S2_'.$loop.'_4'));

			$this->datamodel->table_name='survey_victims';
			if($this->chkHaveMaster($profileId,$master_id ,'survey_victims') == 0){
				$this->datamodel->insert($objdSurveyVictims);
			}else{
				$runningNum = $this->seachRunning($profileId,$master_id);
				$this->datamodel->pk_name='running_num';
				$this->datamodel->pk_value=$runningNum;
				$this->datamodel->update($objdSurveyVictims);
			}

		} 
    }

	public function seachRunning($profile_id,$master_id){				
		$user_name=$this->isLogin();
		$running = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			if($master_id == 'IS NULL'){
				$this->datamodel->sql=" select running_num from survey_victims where profile_id = ".$profile_id." and master_id IS NULL ; "; 
			}else{
				$this->datamodel->sql=" select running_num from survey_victims where profile_id = ".$profile_id." and master_id = ".$master_id." ; "; 
			}
			
			$running=$this->datamodel->first_row_data_sql();
		}
		return $running->running_num;
	}

	public function initSurvey1S3($profileId,$masterId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			$objProfile->master_id = $masterId;
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_S3_3_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_S3_3_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_S3_3_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_S3_3_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_S3_3_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_S3_3_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_S3_3_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_S3_3_6'));
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}

		} 
    }

	public function saveSurvey1S3($loop,$list){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$objProfile=new MyDto();
			$profileId = $list->profile_id;
			if($loop != '1'){
				$master_id = $list->master_id;
				$objProfile->master_id = $master_id;
			}
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_S3_'.$loop.'_3_6'));
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}

		} 
    }

	
	public function saveSurvey1S4($loop,$list){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$objdSurveyVictimsCrimes=new MyDto();
			$profileId = $list->profile_id;
			if($loop != 1){
				$master_id = $list->master_id;
				$objdSurveyVictimsCrimes->master_id = $master_id;
			}
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyVictimsCrimes->profile_id = $profileId;
			$objdSurveyVictimsCrimes->S4_4_1 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_1'));
			$objdSurveyVictimsCrimes->S4_4_1_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_1_text'));
			$objdSurveyVictimsCrimes->S4_4_2 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_2'));
			$objdSurveyVictimsCrimes->S4_4_2_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_2_text'));
			$objdSurveyVictimsCrimes->S4_4_3 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3'));
			$objdSurveyVictimsCrimes->S4_4_3_1 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_1'));
			$objdSurveyVictimsCrimes->S4_4_3_2 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_2'));
			$objdSurveyVictimsCrimes->S4_4_3_2_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_2_text'));
			$objdSurveyVictimsCrimes->S4_4_3_3 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_3'));
			$objdSurveyVictimsCrimes->S4_4_3_3_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_3_'.$this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_3_3')).'_text'));
			$objdSurveyVictimsCrimes->S4_4_4_1 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_1'));
			$objdSurveyVictimsCrimes->S4_4_4_2 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_2'));
			$objdSurveyVictimsCrimes->S4_4_4_3 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_3'));
			$objdSurveyVictimsCrimes->S4_4_4_4 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_4'));
			$objdSurveyVictimsCrimes->S4_4_4_5 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_5'));
			$objdSurveyVictimsCrimes->S4_4_4_6 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_4_6'));
			$objdSurveyVictimsCrimes->S4_4_5 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_5'));
			$objdSurveyVictimsCrimes->S4_4_6 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6'));
			$objdSurveyVictimsCrimes->S4_4_6_1 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_1'));
			$objdSurveyVictimsCrimes->S4_4_6_1_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_1_text'));
			$objdSurveyVictimsCrimes->S4_4_6_2_1 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_1'));
			$objdSurveyVictimsCrimes->S4_4_6_2_2 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_2'));
			$objdSurveyVictimsCrimes->S4_4_6_2_3 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_3'));
			$objdSurveyVictimsCrimes->S4_4_6_2_4 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_4'));
			$objdSurveyVictimsCrimes->S4_4_6_2_5 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_5'));
			$objdSurveyVictimsCrimes->S4_4_6_2_6 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_6'));
			$objdSurveyVictimsCrimes->S4_4_6_2_7 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_7'));
			$objdSurveyVictimsCrimes->S4_4_6_2_8 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_8'));
			$objdSurveyVictimsCrimes->S4_4_6_2_9 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_9'));
			$objdSurveyVictimsCrimes->S4_4_6_2_10 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_10'));
			$objdSurveyVictimsCrimes->S4_4_6_2_11 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_11'));
			$objdSurveyVictimsCrimes->S4_4_6_2_12 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_12'));
			$objdSurveyVictimsCrimes->S4_4_6_2_13 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_13'));
			$objdSurveyVictimsCrimes->S4_4_6_2_14 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_14'));
			$objdSurveyVictimsCrimes->S4_4_6_2_15 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_15'));
			$objdSurveyVictimsCrimes->S4_4_6_2_16 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_16'));
			$objdSurveyVictimsCrimes->S4_4_6_2_17 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_17'));
			$objdSurveyVictimsCrimes->S4_4_6_2_18 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_18'));
			$objdSurveyVictimsCrimes->S4_4_6_2_18_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_6_2_18_text'));
			$objdSurveyVictimsCrimes->S4_4_7 = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_7'));
			$objdSurveyVictimsCrimes->S4_4_7_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_7_text'));

	
			if($this->chkHave($profileId,'survey_victims_crimes') == 0){
				$this->datamodel->insert($objdSurveyVictimsCrimes);
			}else{
				$this->datamodel->update($objdSurveyVictimsCrimes);
			}

		} 
    }

	public function saveSurvey2($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyKnowledgeLaws=new MyDto();
			$objdSurveyKnowledgeLaws->profile_id = $profileId;
			$objdSurveyKnowledgeLaws->S2_1_1 = $this->checkEmpty($this->input->post('2_S2_1_1'));
			$objdSurveyKnowledgeLaws->S2_1_2 = $this->checkEmpty($this->input->post('2_S2_1_2'));
			$objdSurveyKnowledgeLaws->S2_1_3 = $this->checkEmpty($this->input->post('2_S2_1_3'));
			$objdSurveyKnowledgeLaws->S2_1_4 = $this->checkEmpty($this->input->post('2_S2_1_4'));
			$objdSurveyKnowledgeLaws->S2_1_5 = $this->checkEmpty($this->input->post('2_S2_1_5'));
			$objdSurveyKnowledgeLaws->S2_1_6 = $this->checkEmpty($this->input->post('2_S2_1_6'));
			$objdSurveyKnowledgeLaws->S2_1_7 = $this->checkEmpty($this->input->post('2_S2_1_7'));
			$objdSurveyKnowledgeLaws->S2_1_8 = $this->checkEmpty($this->input->post('2_S2_1_8'));
			$objdSurveyKnowledgeLaws->S2_1_9 = $this->checkEmpty($this->input->post('2_S2_1_9'));
			$objdSurveyKnowledgeLaws->S2_1_10 = $this->checkEmpty($this->input->post('2_S2_1_10'));
			$objdSurveyKnowledgeLaws->S2_1_11 = $this->checkEmpty($this->input->post('2_S2_1_11'));
			$objdSurveyKnowledgeLaws->S2_1_12 = $this->checkEmpty($this->input->post('2_S2_1_12'));
			$objdSurveyKnowledgeLaws->S2_2_1 = $this->checkEmpty($this->input->post('2_S2_2_1'));
			$objdSurveyKnowledgeLaws->S2_2_2 = $this->checkEmpty($this->input->post('2_S2_2_2'));
			$objdSurveyKnowledgeLaws->S2_2_3 = $this->checkEmpty($this->input->post('2_S2_2_3'));
			$objdSurveyKnowledgeLaws->S2_2_4 = $this->checkEmpty($this->input->post('2_S2_2_4'));
			$objdSurveyKnowledgeLaws->S2_2_5 = $this->checkEmpty($this->input->post('2_S2_2_5'));
			$objdSurveyKnowledgeLaws->S2_2_6 = $this->checkEmpty($this->input->post('2_S2_2_6'));
			$objdSurveyKnowledgeLaws->S2_2_7 = $this->checkEmpty($this->input->post('2_S2_2_7'));
			$objdSurveyKnowledgeLaws->S2_2_8 = $this->checkEmpty($this->input->post('2_S2_2_8'));
			$objdSurveyKnowledgeLaws->S2_3_1 = $this->checkEmpty($this->input->post('2_S2_3_1'));
			$objdSurveyKnowledgeLaws->S2_3_2 = $this->checkEmpty($this->input->post('2_S2_3_2'));
			$objdSurveyKnowledgeLaws->S2_3_3 = $this->checkEmpty($this->input->post('2_S2_3_3'));
			$objdSurveyKnowledgeLaws->S2_3_4 = $this->checkEmpty($this->input->post('2_S2_3_4'));
			$objdSurveyKnowledgeLaws->S2_3_5 = $this->checkEmpty($this->input->post('2_S2_3_5'));
			$objdSurveyKnowledgeLaws->S2_3_6 = $this->checkEmpty($this->input->post('2_S2_3_6'));
			$objdSurveyKnowledgeLaws->S2_3_7 = $this->checkEmpty($this->input->post('2_S2_3_7'));
			$objdSurveyKnowledgeLaws->S2_3_8 = $this->checkEmpty($this->input->post('2_S2_3_8'));
			$objdSurveyKnowledgeLaws->S2_3_9 = $this->checkEmpty($this->input->post('2_S2_3_9'));
			$objdSurveyKnowledgeLaws->S2_4 = $this->checkEmpty($this->input->post('2_S2_4'));
			$objdSurveyKnowledgeLaws->S2_5 = $this->checkEmpty($this->input->post('2_S2_5'));
			if($this->chkHave($profileId,'survey_knowledge_laws') == 0){
				$this->datamodel->insert($objdSurveyKnowledgeLaws);
			}else{
				$this->datamodel->update($objdSurveyKnowledgeLaws);
			}	

		} 
    }

	public function saveSurvey3($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyPanicInCrimes=new MyDto();
			$objdSurveyPanicInCrimes->profile_id = $profileId;
			$objdSurveyPanicInCrimes->S2_2_1_1 = $this->checkEmpty($this->input->post('3_S2_2_1_1'));
			$objdSurveyPanicInCrimes->S2_2_1_2 = $this->checkEmpty($this->input->post('3_S2_2_1_2'));
			$objdSurveyPanicInCrimes->S2_2_1_3 = $this->checkEmpty($this->input->post('3_S2_2_1_3'));
			$objdSurveyPanicInCrimes->S2_2_1_4 = $this->checkEmpty($this->input->post('3_S2_2_1_4'));
	
			if($this->chkHave($profileId,'survey_panic_in_crimes') == 0){
				$this->datamodel->insert($objdSurveyPanicInCrimes);
			}else{
				$this->datamodel->update($objdSurveyPanicInCrimes);
			}	

		} 
    }
	public function saveSurvey4($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustForSecurity=new MyDto();
			$objdSurveyTrustForSecurity->profile_id = $profileId;
			$objdSurveyTrustForSecurity->S2_2_1 = $this->checkEmpty($this->input->post('4_S2_2_1'));
			$objdSurveyTrustForSecurity->S2_2_2 = $this->checkEmpty($this->input->post('4_S2_2_2'));
			$objdSurveyTrustForSecurity->S2_2_3 = $this->checkEmpty($this->input->post('4_S2_2_3'));
	
			if($this->chkHave($profileId,'survey_trust_for_security') == 0){
				$this->datamodel->insert($objdSurveyTrustForSecurity);
			}else{
				$this->datamodel->update($objdSurveyTrustForSecurity);
			}

		} 
    }
	public function saveSurvey5($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveySdgs=new MyDto();
			$objdSurveySdgs->profile_id = $profileId;
			$objdSurveySdgs->S2_2_1 = $this->checkEmpty($this->input->post('5_S2_2_1'));
			$objdSurveySdgs->S2_2_2 = $this->checkEmpty($this->input->post('5_S2_2_2'));
	
			if($this->chkHave($profileId,'survey_sdgs') == 0){
				$this->datamodel->insert($objdSurveySdgs);
			}else{
				$this->datamodel->update($objdSurveySdgs);
			}

		} 
    }
	public function saveSurvey6($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustInJustic=new MyDto();
			$objdSurveyTrustInJustic->profile_id = $profileId;
			$objdSurveyTrustInJustic->S2_1_1 = $this->checkEmpty($this->input->post('6_S2_1_1'));
			$objdSurveyTrustInJustic->S2_1_2 = $this->checkEmpty($this->input->post('6_S2_1_2'));
			$objdSurveyTrustInJustic->S2_1_3 = $this->checkEmpty($this->input->post('6_S2_1_3'));
			$objdSurveyTrustInJustic->S2_1_4 = $this->checkEmpty($this->input->post('6_S2_1_4'));
			$objdSurveyTrustInJustic->S2_2_1 = $this->checkEmpty($this->input->post('6_S2_2_1'));
			$objdSurveyTrustInJustic->S2_2_2 = $this->checkEmpty($this->input->post('6_S2_2_2'));
			$objdSurveyTrustInJustic->S2_2_3 = $this->checkEmpty($this->input->post('6_S2_2_3'));
			$objdSurveyTrustInJustic->S2_2_4 = $this->checkEmpty($this->input->post('6_S2_2_4'));
			$objdSurveyTrustInJustic->S2_3_1 = $this->checkEmpty($this->input->post('6_S2_3_1'));
			$objdSurveyTrustInJustic->S2_3_2 = $this->checkEmpty($this->input->post('6_S2_3_2'));
			$objdSurveyTrustInJustic->S2_3_3 = $this->checkEmpty($this->input->post('6_S2_3_3'));
			$objdSurveyTrustInJustic->S2_3_4 = $this->checkEmpty($this->input->post('6_S2_3_4'));
			$objdSurveyTrustInJustic->S2_4_1 = $this->checkEmpty($this->input->post('6_S2_4_1'));
			$objdSurveyTrustInJustic->S2_4_2 = $this->checkEmpty($this->input->post('6_S2_4_2'));
			$objdSurveyTrustInJustic->S2_4_3 = $this->checkEmpty($this->input->post('6_S2_4_3'));
			$objdSurveyTrustInJustic->S2_4_4 = $this->checkEmpty($this->input->post('6_S2_4_4'));
			$objdSurveyTrustInJustic->S2_5 = $this->checkEmpty($this->input->post('6_S2_5'));
			$objdSurveyTrustInJustic->S3_1_1 = $this->checkEmpty($this->input->post('6_S3_1_1'));
			$objdSurveyTrustInJustic->S3_1_2 = $this->checkEmpty($this->input->post('6_S3_1_2'));
			$objdSurveyTrustInJustic->S3_1_3 = $this->checkEmpty($this->input->post('6_S3_1_3'));
			$objdSurveyTrustInJustic->S3_1_4 = $this->checkEmpty($this->input->post('6_S3_1_4'));
			$objdSurveyTrustInJustic->S3_1_5 = $this->checkEmpty($this->input->post('6_S3_1_5'));
			$objdSurveyTrustInJustic->S3_2_1 = $this->checkEmpty($this->input->post('6_S3_2_1'));
			$objdSurveyTrustInJustic->S3_2_2 = $this->checkEmpty($this->input->post('6_S3_2_2'));
			$objdSurveyTrustInJustic->S3_2_3 = $this->checkEmpty($this->input->post('6_S3_2_3'));
			$objdSurveyTrustInJustic->S3_2_4 = $this->checkEmpty($this->input->post('6_S3_2_4'));
			$objdSurveyTrustInJustic->S3_2_5 = $this->checkEmpty($this->input->post('6_S3_2_5'));
			$objdSurveyTrustInJustic->S3_3_1 = $this->checkEmpty($this->input->post('6_S3_3_1'));
			$objdSurveyTrustInJustic->S3_3_2 = $this->checkEmpty($this->input->post('6_S3_3_2'));
			$objdSurveyTrustInJustic->S3_3_3 = $this->checkEmpty($this->input->post('6_S3_3_3'));
			$objdSurveyTrustInJustic->S3_3_4 = $this->checkEmpty($this->input->post('6_S3_3_4'));
			$objdSurveyTrustInJustic->S3_3_5 = $this->checkEmpty($this->input->post('6_S3_3_5'));
			$objdSurveyTrustInJustic->S3_4_1 = $this->checkEmpty($this->input->post('6_S3_4_1'));
			$objdSurveyTrustInJustic->S3_4_2 = $this->checkEmpty($this->input->post('6_S3_4_2'));
			$objdSurveyTrustInJustic->S3_4_3 = $this->checkEmpty($this->input->post('6_S3_4_3'));
			$objdSurveyTrustInJustic->S3_4_4 = $this->checkEmpty($this->input->post('6_S3_4_4'));
			$objdSurveyTrustInJustic->S3_4_5 = $this->checkEmpty($this->input->post('6_S3_4_5'));
			$objdSurveyTrustInJustic->S3_5_1 = $this->checkEmpty($this->input->post('6_S3_5_1'));
			$objdSurveyTrustInJustic->S3_5_2 = $this->checkEmpty($this->input->post('6_S3_5_2'));
			$objdSurveyTrustInJustic->S3_5_3 = $this->checkEmpty($this->input->post('6_S3_5_3'));
			$objdSurveyTrustInJustic->S3_5_4 = $this->checkEmpty($this->input->post('6_S3_5_4'));
			$objdSurveyTrustInJustic->S3_5_5 = $this->checkEmpty($this->input->post('6_S3_5_5'));
			$objdSurveyTrustInJustic->S3_6 = $this->checkEmpty($this->input->post('6_S3_6'));

	
			if($this->chkHave($profileId,'survey_trust_in_justic') == 0){
				$this->datamodel->insert($objdSurveyTrustInJustic);
			}else{
				$this->datamodel->update($objdSurveyTrustInJustic);
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

	function chkHaveMaster($profile_id,$master_id,$table_name){				
		$user_name=$this->isLogin();
		$count = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->table_name=$table_name;
			if($master_id == 'IS NULL'){
				$this->datamodel->condition='where profile_id='.$profile_id.' and master_id IS NULL'; 
			}else{
				$this->datamodel->condition='where profile_id='.$profile_id.' and master_id ='.$master_id; 
			}
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
