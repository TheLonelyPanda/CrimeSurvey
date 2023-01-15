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
	public function qaMainTo($profile_id) {
		$this->session->set_userdata('p_am_id',$profile_id);
		$this->qaMainList();
	}	

	public function qaMainList() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list_admin";		
			$data['h_back']="main/index";    	        
			
			//LOAD MEMBER
			$this->load->model("datamodel");
			$this->datamodel->table_name='qa_master';
		    $this->datamodel->sql=" select * from qa_master where qa_status='A'";   
		    $data['list_data']=$this->datamodel->list_data_sql();
						

			
	        $this->load->view('/include/layout_header',$data);
	        $this->load->view('/private/qa_main_list', $data);
	        $this->load->view('/include/layout_footer');	        
		}
    }    
	public function qaMainFormSave() {
		$master_id=$this->input->post('master_id');
		$topic_id=$this->input->post('topic_id');
		$choice_id=$this->input->post('choice_id');
		$profile_id=$this->session->userdata('p_am_id');
		$step=$this->input->post('step');
		$step++;
		
		$this->load->model("datamodel");
		$this->datamodel->table_name='t_qa';
		$this->datamodel->pk_name='code_id';
		$this->datamodel->pk_value=0;
		$obj=new MyDto();
		$obj->master_id=$master_id;
		$obj->choice_id=$choice_id;
		$obj->topic_id=$topic_id;
		$obj->profile_id=$profile_id;
		$obj->create_dtm=date('Y-m-d H:i:s');
		$this->datamodel->insert($obj);
		
		
		$this->qaMainForm($master_id,$step);
	}	    
	public function qaMainForm($master_id,$step) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list_admin";		
			$data['h_back']="main/qaMainList";    	        
			$data['state']="";
			$data['master_id']=$master_id;
			$data['step']=$step;
			//LOAD MEMBER
			$this->load->model("datamodel");
			$this->datamodel->table_name='qa_master';
		    $this->datamodel->sql=" select * from qa_master where code_id=".$master_id;   
		    $tmp=$this->datamodel->list_data_sql();
		    $data['master_data']=$tmp[0];
			
			$this->datamodel->table_name='qa_topic';
		    $this->datamodel->sql=" select * from qa_topic where master_id=".$tmp[0]->code_id." limit $step,1";   
		    $tmp=$this->datamodel->list_data_sql();
		    if(count($tmp)>0){
			    $data['topic_data']=$tmp[0];
				$this->datamodel->table_name='qa_choice';
			    $this->datamodel->sql=" select * from qa_choice where topic_id=".$tmp[0]->code_id;   
			    $data['list_data']=$this->datamodel->list_data_sql();
		    }else{
		    	if($step >0){
		    		$data['state']="finish";
		    	}else{
		    		$data['state']="notfound";
		    	}
		    }
						

			
	        $this->load->view('/include/layout_header',$data);
	        $this->load->view('/private/qa_main_form', $data);
	        $this->load->view('/include/layout_footer');	        
		}
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
			
			//LOAD MEMBER
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_profile1';
			$this->datamodel->condition=" where user_id=".$this->session->userdata('u_am_id');		
			$list_status=$this->datamodel->list_data();
			$data['list_member']=$list_status;
			
			
			$this->datamodel->table_name='p_profile1';
			$this->datamodel->condition='where 1=1';   
		    $data['cnt_member']=$this->datamodel->list_data_count();

			$this->datamodel->table_name='p_user';
			$this->datamodel->condition="where user_level <> 'A' ";
		    $data['cnt_user']=$this->datamodel->list_data_count();

			$this->datamodel->table_name='t_activity';
			$this->datamodel->condition='where 1=1';   
		    $data['cnt_act']=$this->datamodel->list_data_count();
			
			
	        $this->load->view('/private/index', $data);	        
		}
    }
    public function survey() {
		//$user_name=$this->is_login();
		//if($user_name != false){
			$data['u_disp']="User ทดสอบ";					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
	        $this->load->view('/include/layout_header',$data);
	        $this->load->view('/private/survey', $data);
	        $this->load->view('/include/layout_footer');	        
		//}
    }
    
    public function register() {
		//$user_name=$this->is_login();
		//if($user_name != false){
			$data['u_disp']="";					
			$data['h_flag']="list";
			$data['h_back']="";		    	        
	        $this->load->view('/include/layout_header',$data);
	        $this->load->view('/private/register', $data);
	        $this->load->view('/include/layout_footer');	        
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
