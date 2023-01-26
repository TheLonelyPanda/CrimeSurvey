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

	        $this->load->view('/private/index', $data);	        
		}
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



     public function editUser(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='new_user';
			$this->datamodel->pk_name='username';
			$this->datamodel->pk_value=$this->input->post('modalUsername');
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

  public function qaTopicForm($code_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="form";
			$data['h_back']="admin/qaTopicList";
			$data['h_submit']="admin/saveQaTopic";
			$this->load->model("datamodel");
			if($code_id <>0){
				//LOAD MAIN TABLE							
				$this->datamodel->table_name='qa_topic';
				$this->datamodel->pk_name='code_id';
				$this->datamodel->pk_value=$code_id;		
				$obj=$this->datamodel->load();							
			}else{
				$obj=new MyDto();
				$obj->code_id=$code_id;
				$obj->topic_name="";	
				$obj->topic_order="";
				$obj->topic_status="W";
				$obj->create_date="";
			}
			$data['obj']=$obj;
			//LOAD COMBO STATUS
			$this->datamodel->table_name='m_config';
			$this->datamodel->condition=" where conf_group='CONF_QA_STATUS' order by conf_order " ;		
			$list_status=$this->datamodel->list_data();
			$data['list_status']=$list_status;
			
			
	        $this->load->view('/include/layout_header',$data);
	        $this->load->view('/private/qa_topic_form', $data);
	        $this->load->view('/include/layout_footer');	        
		}
    }
     public function saveQaTopic(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='qa_topic';
			$this->datamodel->pk_name='code_id';			
			$code_id=$this->input->post('code_id');								
			$this->datamodel->pk_value=$code_id;
			$obj=new MyDto();
			$obj->topic_name=$this->input->post('topic_name');			
			$obj->topic_order=$this->input->post('topic_order');
			$obj->topic_status=$this->input->post('topic_status');
			$obj->create_date=date('Y-m-d');
			if($code_id==0){
				$obj->master_id=$this->session->userdata('master_id');
				$this->datamodel->insert($obj);
			}else{
				$this->datamodel->update($obj);
			}						
	        $this->functionhelper->jsonHeader();
	        $this->functionhelper->jsonResponseFormData('บันทึกข้อมูลเรียบร้อยแล้ว', '', '',$obj);		
		}   
    }     
	  public function qaChoiceForm($code_id) {
			$user_name=$this->isLogin();
			if($user_name != false){
				$data['u_disp']=$this->session->userdata('user_name');					
				$data['h_flag']="form";
				$data['h_back']="admin/qaChoiceList";
				$data['h_submit']="admin/saveQaChoice";
				$this->load->model("datamodel");
				if($code_id <>0){
					//LOAD MAIN TABLE							
					$this->datamodel->table_name='qa_choice';
					$this->datamodel->pk_name='code_id';
					$this->datamodel->pk_value=$code_id;		
					$obj=$this->datamodel->load();							
				}else{
					$obj=new MyDto();
					$obj->code_id=$code_id;
					$obj->choice_name="";
					$obj->choice_value="";	
					$obj->choice_order="";
					$obj->choice_status="W";
					$obj->choice_date="";
				}
				$data['obj']=$obj;
				//LOAD COMBO STATUS
				$this->datamodel->table_name='m_config';
				$this->datamodel->condition=" where conf_group='CONF_QA_STATUS' order by conf_order " ;		
				$list_status=$this->datamodel->list_data();
				$data['list_status']=$list_status;
				
				
		        $this->load->view('/include/layout_header',$data);
		        $this->load->view('/private/qa_choice_form', $data);
		        $this->load->view('/include/layout_footer');	        
			}
	    }
     public function saveQaChoice(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='qa_choice';
			$this->datamodel->pk_name='code_id';			
			$code_id=$this->input->post('code_id');								
			$this->datamodel->pk_value=$code_id;
			$obj=new MyDto();
			$obj->choice_name=$this->input->post('choice_name');
			$obj->choice_value=$this->input->post('choice_value');			
			$obj->choice_order=$this->input->post('choice_order');
			$obj->choice_status=$this->input->post('choice_status');
			$obj->create_date=date('Y-m-d');
			if($code_id==0){
				$obj->topic_id=$this->session->userdata('topic_id');
				$this->datamodel->insert($obj);
			}else{
				$this->datamodel->update($obj);
			}						
	        $this->functionhelper->jsonHeader();
	        $this->functionhelper->jsonResponseFormData('บันทึกข้อมูลเรียบร้อยแล้ว', '', '',$obj);		
		}   
    }     

	function isLogin(){				
		$user_name=$this->session->userdata('user_name');
		if($user_name==''){				
			redirect('/user/formLogin');
			return false;
		}else{			
			return $user_name;
		}
	}
    
}
