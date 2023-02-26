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
			$this->datamodel->condition=" where master_id is null and status = 'complete'";		
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

	public function goVictims($profile_id,$master_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";
			$data['u_profile_id']=$profile_id;
			
			$data['u_master_id']=$master_id;

			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->condition=" where profile_id =".$profile_id;		
			$data['d_surveyVictimsCrimes']=$this->datamodel->list_data();

			$this->datamodel->sql=" select profile_code from survey_victims where profile_id = ".$profile_id;   
			$data_Profile=$this->datamodel->first_row_data_sql();
			$profileCode = $data_Profile->profile_code;
			$masterOut = ''; 
			if($master_id == 'master'){
				$masterOut = $profile_id;
			}else{
				$masterOut = $master_id;
			};
			$data['masterOut'] = $masterOut;
			if($data['d_surveyVictimsCrimes'] == null){
				$objdSurveyVictimsCrimes=new MyDto();
				$objdSurveyVictimsCrimes->profile_id = $profile_id;
				if($master_id != 'master'){
					$objdSurveyVictimsCrimes->master_id = $master_id;
				}
				$objdSurveyVictimsCrimes->profile_code = $profileCode;
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
				$this->datamodel->table_name='survey_victims_crimes';
				$this->datamodel->insert($objdSurveyVictimsCrimes);

				$this->datamodel->table_name='survey_victims_crimes';
				$this->datamodel->condition=" where profile_id =".$profile_id;		
				$data['d_surveyVictimsCrimes']=$this->datamodel->list_data();
			}

			$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_victims_crimes'; ";   
			$u_now_id=$this->datamodel->first_row_data_sql();
			$data['u_now_runing_num']=$u_now_id->AUTO_INCREMENT;

			$this->datamodel->sql='select * from survey_profile where profile_id ='.$profile_id;
			$data['d_surveyProfile_victim']=$this->datamodel->first_row_data_sql();
			
			$this->load->view('/private/victim', $data);
		}
    }

	public function deleteCrime($profile_id,$running_num,$master_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember"; 
			
			
			$this->saveSurveyCrime($profile_id,$master_id,'back');
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='running_num';
			$this->datamodel->pk_value=$running_num;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/goVictims/'.$profile_id.'/'.$master_id));      
		}
    }
	public function addCrime($profile_id,$master_id){
		$user_name=$this->isLogin();

		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->sql=" select profile_code from survey_victims where profile_id = ".$profile_id;   
			$data_Profile=$this->datamodel->first_row_data_sql();
			$profileCode = $data_Profile->profile_code;

			$objdSurveyVictimsCrimes=new MyDto();
			$objdSurveyVictimsCrimes->profile_id = $profile_id;
			if($master_id != 'master'){
				$objdSurveyVictimsCrimes->master_id = $master_id;
			}
			$objdSurveyVictimsCrimes->profile_code = $profileCode;
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
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->insert($objdSurveyVictimsCrimes);
		}
	}

	public function saveSurveyInCrime($profileId,$i,$running,$master_id){
		if($i == '1'){
			$this->saveSurveyCrimeS3($profileId);
		}
		
		$this->saveSurveyCrimeS4loop($profileId,$i,$running);

		$this->functionhelper->jsonHeader(); 
		$this->functionhelper->jsonResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/goVictims/'.$profileId.'/'.$master_id));
	}

	public function saveSurveyCrime($profileId,$master_id,$back){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->condition='where profile_id='.$profileId; 
			$listData=$this->datamodel->list_data();
			
			if ($master_id != 'master') {
				$this->saveSurveyCrimeS3($profileId);
			}
			

			for ($i=1; $i <= count($listData); $i++) { 
				$this->saveSurveyCrimeS4loop($profileId,$i,$listData[$i-1]->running_num);
			}

			
			if($back == 'back'){
				if($master_id == 'master'){
					$master_id = $profileId;
				}
				$this->functionhelper->jsonHeader(); 
				$this->functionhelper->jsonResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/survey/'.$master_id));	
			}else{
				$this->functionhelper->jsonHeader(); 
				$this->functionhelper->jsonResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/goVictims/'.$profileId.'/'.$master_id));	
			}
		} 

		
    }


	public function saveSurveyCrimeS4loop($profileId,$loop,$running_num){
		$user_name=$this->isLogin();
		if($user_name != false){ 


			$objdSurveyVictimsCrimes=new MyDto();
			$this->load->model("datamodel");

			$this->datamodel->sql=" select profile_code from survey_victims where profile_id = ".$profileId;   
			$data_Profile=$this->datamodel->first_row_data_sql();
			$profileCode = $data_Profile->profile_code;


			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='running_num';
			$this->datamodel->pk_value=$running_num;

			
			$objdSurveyVictimsCrimes->profile_code = $profileCode;
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
			$objdSurveyVictimsCrimes->S4_4_7 = $this->checkEmptyS($this->input->post('1_S4_'.$loop.'_4_7'));
			$objdSurveyVictimsCrimes->S4_4_7_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_7_text'));
			$this->datamodel->update($objdSurveyVictimsCrimes);

		} 
    }

	public function saveSurveyCrimeS3($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 

			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			
			$objProfile=new MyDto();
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_S3_1_3_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_S3_1_3_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_S3_1_3_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_S3_1_3_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_S3_1_3_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_S3_1_3_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_S3_1_3_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_S3_1_3_6'));
			$this->datamodel->update($objProfile);

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
			$profileCode=$this->chkProfileCodeFirst($data['u_now_id']);
			if($profileCode != null || $profileCode != ''){
				$data['u_profile_code'] = $profileCode;
			}else{
				$data['u_profile_code'] ='';
			}

			$data['u_check_new_survey_profile']=$this->chkHave($data['u_now_id'],'survey_profile');
			if($data['u_check_new_survey_profile'] == 0){
				$objSurveyProfile=new MyDto();
				$objSurveyProfile->profile_id = $profile_id;
				$objSurveyProfile->master_id = '';
				$objSurveyProfile->A2 = '';
				$objSurveyProfile->A3 = '';
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
				$objSurveyProfile->{'1_1_7'} = '';
				$objSurveyProfile->{'1_1_7_text'} = '';
				$objSurveyProfile->{'1_1_7_1'} = '';
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
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			$objProfile->profile_code = '';
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
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_text'} = $this->checkEmpty($this->input->post('1_1_7_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
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
			$this->saveSurvey1($u_now_id,1,$objlist,'');
			$this->saveSurvey1S4(1,$objlist,'');
			$this->saveSurvey2($u_now_id,'');
			$this->saveSurvey3($u_now_id,'');
			$this->saveSurvey4($u_now_id,'');
			$this->saveSurvey5($u_now_id,'');
			$this->saveSurvey6($u_now_id,'');

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

	public function checkEmptyS($string){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			if($string != '99'){
				if($string == null){
					return '';
				}
			}
		}
		return $string;
	}

	public function saveSurvey($hidden){
		$user_name=$this->isLogin();
		if($user_name != false){    
			$profileCode = '';
			$provinceCode = '';
			$profileId = $this->input->post('1_text');
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
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
			
			if('' == $this->chkProfileCodeFirst($profileId)){
				$provinceCode = $this->queryProviceId($objProfile->A4_1);
				$profileCode = $provinceCode.date("Ymd").$profileId;
				$objProfile->profile_code = $profileCode;
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_text'} = $this->checkEmpty($this->input->post('1_1_7_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			if($hidden == 'false'){
				$objProfile->status = 'complete';
			}
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$this->datamodel->insert($objProfile);
			}else{
				$this->datamodel->update($objProfile);
			}	

			$objlist=new MyDto();
			$objlist->running_num = 0;
			$objlist->profile_id = $profileId;
			$this->saveSurvey1($profileId,1,$objlist,$provinceCode);

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->condition='where master_id='.$profileId; 
			$listData=$this->datamodel->list_data();

			for ($i=2; $i <= count($listData)+1; $i++) { 
				$this->saveSurvey1($profileId,$i,$listData[$i-2],$provinceCode);
			}
			$this->saveSurvey2($profileId,$profileCode);
			$this->saveSurvey3($profileId,$profileCode);
			$this->saveSurvey4($profileId,$profileCode);
			$this->saveSurvey5($profileId,$profileCode);
			$this->saveSurvey6($profileId,$profileCode);
			
			if($hidden != 'true'){
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/index'),$objProfile);	
			}
			

		} 
    }

	public function saveSurvey1($profileId,$loop,$list,$provinceCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$master_id = 'IS NULL';
			$chkInsert = '';
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
				$chkInsert = $this->chkPCNotInsert($objdSurveyVictims->profile_id,$master_id,'survey_victims');
			}else{
				$objdSurveyVictims->profile_id = $profileId;
			}
			if($provinceCode != ''){
				$objdSurveyVictims->profile_code = $provinceCode.date("Ymd").$objdSurveyVictims->profile_id;
			}else if($chkInsert !=''){
				$objdSurveyVictims->profile_code = $chkInsert.$objdSurveyVictims->profile_id;
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

	public function saveSurvey1S3($loop,$list,$provinceCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$chkInsert = '';
			$objProfile=new MyDto();
			$profileId = $list->profile_id;
			if($loop != '1'){
				$master_id = $list->master_id;
				$objProfile->master_id = $master_id;
				$chkInsert = $this->chkPCNotInsert($profileId,$master_id,'survey_profile');
			}
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			
			$objProfile=new MyDto();
			if($provinceCode != ''){
				$objProfile->profile_code = $provinceCode.date("Ymd").$profileId;
			}else if($chkInsert !=''){
				$objProfile->profile_code = $chkInsert.$profileId;
			}
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

	
	public function saveSurvey1S4($loop,$list,$provinceCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$chkInsert = '';
			$objdSurveyVictimsCrimes=new MyDto();
			$profileId = $list->profile_id;
			if($loop != 1){
				$master_id = $list->master_id;
				$objdSurveyVictimsCrimes->master_id = $master_id;
				$chkInsert = $this->chkPCNotInsert($profileId,$master_id,'survey_victims_crimes');
			}
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyVictimsCrimes->profile_id = $profileId;
			
			if($provinceCode != ''){
				$objdSurveyVictimsCrimes->profile_code = $provinceCode.date("Ymd").$profileId;
			}else if($chkInsert !=''){
				$objdSurveyVictimsCrimes->profile_code = $chkInsert.$profileId;
			}
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
			$objdSurveyVictimsCrimes->S4_4_7 = $this->checkEmptyS($this->input->post('1_S4_'.$loop.'_4_7'));
			$objdSurveyVictimsCrimes->S4_4_7_text = $this->checkEmpty($this->input->post('1_S4_'.$loop.'_4_7_text'));

	
			if($this->chkHave($profileId,'survey_victims_crimes') == 0){
				$this->datamodel->insert($objdSurveyVictimsCrimes);
			}else{
				$this->datamodel->update($objdSurveyVictimsCrimes);
			}

		} 
    }

	public function saveSurvey2($profileId,$profileCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyKnowledgeLaws=new MyDto();
			$objdSurveyKnowledgeLaws->profile_id = $profileId;
			if($profileCode != ''){
				$objdSurveyKnowledgeLaws->profile_code = $profileCode;
			}
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

	public function saveSurvey3($profileId,$profileCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyPanicInCrimes=new MyDto();
			$objdSurveyPanicInCrimes->profile_id = $profileId;
			if($profileCode != ''){
				$objdSurveyPanicInCrimes->profile_code = $profileCode;
			}
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
	public function saveSurvey4($profileId,$profileCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustForSecurity=new MyDto();
			$objdSurveyTrustForSecurity->profile_id = $profileId;
			if($profileCode != ''){
				$objdSurveyTrustForSecurity->profile_code = $profileCode;
			}
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
	public function saveSurvey5($profileId,$profileCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveySdgs=new MyDto();
			$objdSurveySdgs->profile_id = $profileId;
			if($profileCode != ''){
				$objdSurveySdgs->profile_code = $profileCode;
			}
			$objdSurveySdgs->S2_2_1 = $this->checkEmpty($this->input->post('5_S2_2_1'));
			$objdSurveySdgs->S2_2_2 = $this->checkEmpty($this->input->post('5_S2_2_2'));
	
			if($this->chkHave($profileId,'survey_sdgs') == 0){
				$this->datamodel->insert($objdSurveySdgs);
			}else{
				$this->datamodel->update($objdSurveySdgs);
			}

		} 
    }
	public function saveSurvey6($profileId,$profileCode){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objdSurveyTrustInJustic=new MyDto();
			$objdSurveyTrustInJustic->profile_id = $profileId;
			if($profileCode != ''){
				$objdSurveyTrustInJustic->profile_code = $profileCode;
			}
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
       

	public function export($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	      
			
			$this->load->library('zip');
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$this->load->model("datamodel");

			$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id' or master_id = '$profile_id'";
			$profileQueryData=$this->datamodel->list_data_sql_export();
			$profileData = $this->dbutil->csv_from_result($profileQueryData);
			write_file('./temp/survey_profile.csv', $profileData);

			$this->datamodel->sql="select * from survey_victims where profile_id='$profile_id' or master_id = '$profile_id'";
			$victimsQueryData=$this->datamodel->list_data_sql_export();
			$victimsData = $this->dbutil->csv_from_result($victimsQueryData);
			write_file('./temp/survey_victims.csv', $victimsData);

			$this->datamodel->sql="select * from survey_victims_crimes where profile_id='$profile_id' or master_id = '$profile_id'";
			$crimesQueryData=$this->datamodel->list_data_sql_export();
			$crimesData = $this->dbutil->csv_from_result($crimesQueryData);
			write_file('./temp/survey_victims_crimes.csv', $crimesData);

			$this->datamodel->sql="select * from survey_knowledge_laws where profile_id='$profile_id'";
			$lawsQueryData=$this->datamodel->list_data_sql_export();
			$lawsData = $this->dbutil->csv_from_result($lawsQueryData);
			write_file('./temp/survey_knowledge_laws.csv', $lawsData);

			$this->datamodel->sql="select * from survey_panic_in_crimes where profile_id='$profile_id'";
			$panicQueryData=$this->datamodel->list_data_sql_export();
			$panicData = $this->dbutil->csv_from_result($panicQueryData);
			write_file('./temp/survey_panic_in_crimes.csv', $panicData);

			$this->datamodel->sql="select * from survey_trust_for_security where profile_id='$profile_id'";
			$securityQueryData=$this->datamodel->list_data_sql_export();
			$securityData = $this->dbutil->csv_from_result($securityQueryData);
			write_file('./temp/survey_trust_for_security.csv', $securityData);

			$this->datamodel->sql="select * from survey_sdgs where profile_id='$profile_id'";
			$sdgsQueryData=$this->datamodel->list_data_sql_export();
			$sdgsData = $this->dbutil->csv_from_result($sdgsQueryData);
			write_file('./temp/survey_sdgs.csv', $sdgsData);

			$this->datamodel->sql="select * from survey_trust_in_justic where profile_id='$profile_id'";
			$justicQueryData=$this->datamodel->list_data_sql_export();
			$justicData = $this->dbutil->csv_from_result($justicQueryData);
			write_file('./temp/survey_trust_in_justic.csv', $justicData);

			// Zip the CSV files
			$zip_file_path = './temp/csv_'.$profile_id.'.zip';
			$this->zip->add_data('survey_profile.csv', $profileData);
			$this->zip->add_data('survey_victims.csv', $victimsData);
			$this->zip->add_data('survey_victims_crimes.csv', $crimesData);
			$this->zip->add_data('survey_knowledge_laws.csv', $lawsData);
			$this->zip->add_data('survey_panic_in_crimes.csv', $panicData);
			$this->zip->add_data('survey_trust_for_security.csv', $securityData);
			$this->zip->add_data('survey_sdgs.csv', $sdgsData);
			$this->zip->add_data('survey_trust_in_justic.csv', $justicData);
			$this->zip->archive($zip_file_path);

			// Send the zip file as response
			$zip_file_data = file_get_contents($zip_file_path);
			force_download('csv_'.$profile_id.'.zip', $zip_file_data);

		}
    }

	public function exportAll() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	      
			
			$this->load->library('zip');
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$this->load->model("datamodel");

			$this->datamodel->sql="SELECT profile_id, master_id, profile_code, A2, A3, A4, A4_1, A4_2, A4_3, A4_4, A4_5, `1_1_1`, `1_1_2`, `1_1_3`, `1_1_4`, `1_1_4_text`, `1_1_5`, `1_1_5_text`, `1_1_6`, `1_1_7`, `1_1_7_text`, `1_1_7_1`, `1_2`, `1_2_text`, `1_3`, `1_3_text`, Create_DTM, Update_DTM
			FROM survey_profile WHERE status = 'complete' ;";
			$profileQueryData=$this->datamodel->list_data_sql_export();
			$profileData = $this->dbutil->csv_from_result($profileQueryData);
			write_file('./temp/survey_profile.csv', $profileData);

			$this->datamodel->sql="SELECT sv.profile_id, sv.master_id, sv.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, sv.Create_DTM, sv.Update_DTM, sv.S2_1, sv.S2_2, sv.S2_3, sv.S2_4
			FROM survey_victims sv , survey_profile p where sv.master_id = p.profile_id and p.status = 'complete';";
			$victimsQueryData=$this->datamodel->list_data_sql_export();
			$victimsData = $this->dbutil->csv_from_result($victimsQueryData);
			write_file('./temp/survey_victims.csv', $victimsData);

			$this->datamodel->sql="SELECT svc.profile_id, svc.master_id, svc.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, svc.Create_DTM, svc.Update_DTM, svc.S4_4_1, svc.S4_4_1_text, svc.S4_4_2, svc.S4_4_2_text, svc.S4_4_3, svc.S4_4_3_1, svc.S4_4_3_2, svc.S4_4_3_2_text, svc.S4_4_3_3, svc.S4_4_3_3_text, svc.S4_4_4_1, svc.S4_4_4_2, svc.S4_4_4_3, svc.S4_4_4_4, svc.S4_4_4_5, svc.S4_4_4_6, svc.S4_4_5, svc.S4_4_6, svc.S4_4_6_1, svc.S4_4_6_1_text, svc.S4_4_6_2_1, svc.S4_4_6_2_2, svc.S4_4_6_2_3, svc.S4_4_6_2_4, svc.S4_4_6_2_5, svc.S4_4_6_2_6, svc.S4_4_6_2_7, svc.S4_4_6_2_8, svc.S4_4_6_2_9, svc.S4_4_6_2_10, svc.S4_4_6_2_11, svc.S4_4_6_2_12, svc.S4_4_6_2_13, svc.S4_4_6_2_14, svc.S4_4_6_2_15, svc.S4_4_6_2_16, svc.S4_4_6_2_17, svc.S4_4_6_2_18, svc.S4_4_6_2_18_text, svc.S4_4_7, svc.S4_4_7_text
			FROM survey_victims_crimes svc , survey_profile p where svc.master_id = p.profile_id and svc.S4_4_1 <> '' and p.status = 'complete';";
			$crimesQueryData=$this->datamodel->list_data_sql_export();
			$crimesData = $this->dbutil->csv_from_result($crimesQueryData);
			write_file('./temp/survey_victims_crimes.csv', $crimesData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, kl.S2_1_1, kl.S2_1_2, kl.S2_1_3, kl.S2_1_4, kl.S2_1_5, kl.S2_1_6, kl.S2_1_7, kl.S2_1_8, kl.S2_1_9, kl.S2_1_10, kl.S2_1_11, kl.S2_1_12, kl.S2_2_1, kl.S2_2_2, kl.S2_2_3, kl.S2_2_4, kl.S2_2_5, kl.S2_2_6, kl.S2_2_7, kl.S2_2_8, kl.S2_3_1, kl.S2_3_2, kl.S2_3_3, kl.S2_3_4, kl.S2_3_5, kl.S2_3_6, kl.S2_3_7, kl.S2_3_8, kl.S2_3_9, kl.S2_4, kl.S2_5, kl.Create_DTM, kl.Update_DTM
			FROM survey_profile p , survey_knowledge_laws kl where p.profile_id = kl.profile_id and p.status = 'complete';";
			$lawsQueryData=$this->datamodel->list_data_sql_export();
			$lawsData = $this->dbutil->csv_from_result($lawsQueryData);
			write_file('./temp/survey_knowledge_laws.csv', $lawsData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, pic.S2_2_1_1, pic.S2_2_1_2, pic.S2_2_1_3, pic.S2_2_1_4, pic.Create_DTM, pic.Update_DTM
			FROM survey_profile p , survey_panic_in_crimes pic where p.profile_id = pic.profile_id and p.status = 'complete';";
			$panicQueryData=$this->datamodel->list_data_sql_export();
			$panicData = $this->dbutil->csv_from_result($panicQueryData);
			write_file('./temp/survey_panic_in_crimes.csv', $panicData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, tfs.S2_2_1, tfs.S2_2_2, tfs.S2_2_3, tfs.Create_DTM, tfs.Update_DTM
			FROM survey_profile p , survey_trust_for_security tfs where p.profile_id = tfs.profile_id and p.status = 'complete';";
			$securityQueryData=$this->datamodel->list_data_sql_export();
			$securityData = $this->dbutil->csv_from_result($securityQueryData);
			write_file('./temp/survey_trust_for_security.csv', $securityData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, s.S2_2_1, s.S2_2_2, s.Create_DTM, s.Update_DTM
			FROM survey_profile p , survey_sdgs s where p.profile_id = s.profile_id and p.status = 'complete';";
			$sdgsQueryData=$this->datamodel->list_data_sql_export();
			$sdgsData = $this->dbutil->csv_from_result($sdgsQueryData);
			write_file('./temp/survey_sdgs.csv', $sdgsData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, tij.S2_1_1, tij.S2_1_2, tij.S2_1_3, tij.S2_1_4, tij.S2_2_1, tij.S2_2_2, tij.S2_2_3, tij.S2_2_4, tij.S2_3_1, tij.S2_3_2, tij.S2_3_3, tij.S2_3_4, tij.S2_4_1, tij.S2_4_2, tij.S2_4_3, tij.S2_4_4, tij.S2_5, tij.S3_1_1, tij.S3_1_2, tij.S3_1_3, tij.S3_1_4, tij.S3_1_5, tij.S3_2_1, tij.S3_2_2, tij.S3_2_3, tij.S3_2_4, tij.S3_2_5, tij.S3_3_1, tij.S3_3_2, tij.S3_3_3, tij.S3_3_4, tij.S3_3_5, tij.S3_4_1, tij.S3_4_2, tij.S3_4_3, tij.S3_4_4, tij.S3_4_5, tij.S3_5_1, tij.S3_5_2, tij.S3_5_3, tij.S3_5_4, tij.S3_5_5, tij.S3_6, tij.Create_DTM, tij.Update_DTM
			FROM survey_profile p , survey_trust_in_justic tij where p.profile_id = tij.profile_id and p.status = 'complete';";
			$justicQueryData=$this->datamodel->list_data_sql_export();
			$justicData = $this->dbutil->csv_from_result($justicQueryData);
			write_file('./temp/survey_trust_in_justic.csv', $justicData);

			// Zip the CSV files
			$zip_file_path = './temp/csv_All.zip';
			$this->zip->add_data('survey_profile.csv', $profileData);
			$this->zip->add_data('survey_victims.csv', $victimsData);
			$this->zip->add_data('survey_victims_crimes.csv', $crimesData);
			$this->zip->add_data('survey_knowledge_laws.csv', $lawsData);
			$this->zip->add_data('survey_panic_in_crimes.csv', $panicData);
			$this->zip->add_data('survey_trust_for_security.csv', $securityData);
			$this->zip->add_data('survey_sdgs.csv', $sdgsData);
			$this->zip->add_data('survey_trust_in_justic.csv', $justicData);
			$this->zip->archive($zip_file_path);

			// Send the zip file as response
			$zip_file_data = file_get_contents($zip_file_path);
			force_download('csv_All.zip', $zip_file_data);

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

	function queryProviceId($province){				
		$user_name=$this->isLogin();
		$codeId = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select code from provinces where name_th= '".$province."'";   
			$data=$this->datamodel->first_row_data_sql();
			$codeId = $data->code;
		}
		return $codeId;
	}

	function chkProfileCodeFirst($profile_id){				
		$user_name=$this->isLogin();
		$profileCode = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select profile_code from survey_profile where profile_id = ".$profile_id;   
			$data=$this->datamodel->first_row_data_sql();
			if($data != null){
				$profileCode = $data->profile_code;
			}
			
		}
		return $profileCode;
	}

	function chkPCNotInsert($profile_id,$master_id,$table){				
		$user_name=$this->isLogin();
		$profileCode = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select profile_code from survey_profile where profile_id = ".$master_id;   
			$data=$this->datamodel->first_row_data_sql();
			$profileCodeMaster = $data->profile_code;

			$this->datamodel->sql=" select profile_code from ".$table." where profile_id = ".$profile_id;   
			$data=$this->datamodel->first_row_data_sql();
			if($data == null){
				$profileCodeMember = '';
			}else{
				$profileCodeMember = $data->profile_code;
			}
			
			
			if($profileCodeMaster != '' && ($profileCodeMember == '' || $profileCodeMember == NULL)){
				return substr($profileCodeMaster,0,10);
			}
		}
		return $profileCode;
	}

	public function queryProfileIdNext(){				
		$user_name=$this->isLogin();
		$profileId = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'lawdb' AND TABLE_NAME = 'survey_profile'; ";   
			$u_now_id=$this->datamodel->first_row_data_sql();
			$profileId=$u_now_id->AUTO_INCREMENT;
		}
		echo $profileId;
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
