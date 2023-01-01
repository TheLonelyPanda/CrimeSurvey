<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }

	public function submitLogin(){
		$user_name=$this->input->post('user_name');
		$pwd=$this->input->post('pwd');
		$this->load->model('datamodel');
		$this->datamodel->table_name='p_user';
		$this->datamodel->condition=" where user_name='$user_name' and user_pass='$pwd'  and user_status='A'" ;		
		$list_data=$this->datamodel->list_data();	
		$u_pwd="";
		$u_am_id="";		
		$u_am_name="";
		$user_level="";
		$have_data=false;			
		foreach ($list_data as $row){
	    	$u_am_id= $row->code_id;
	    	$u_pwd= $row->user_pass;
	    	$user_level=$row->user_level;
	    	$have_data=true;	    			
		}
		if($have_data && $u_pwd==$pwd){
			$siteURL=site_url('main/index');
			if($user_level=="A") { //chk is admin
				$siteURL=site_url('admin/index');	
			}				
			$this->session->set_userdata('user_name',$user_name);
			$this->session->set_userdata('u_am_id',$u_am_id);
			$this->session->set_userdata('u_level',$user_level);		
			$this->functionhelper->jsonHeader();
        	$this->functionhelper->jsonResponseFormSuccess('เข้าสู่ระบบเรีบบร้อยแล้ว', 'ยินดีต้อนรับคุณ '.$user_name, '',$siteURL);
		}else{
			$this->functionhelper->jsonHeader();
        	$this->functionhelper->jsonResponseFormFail('กรอกข้อมูลไม่ถูกต้องไม่สามารถใช้งานได้', 'กรุณากรอกข้อมูล user name หรือ password ให้ถูกต้อง', '','');
		}							
	}

   
	public function formLogin(){						
		$data['user_name']="";
		$data['h_back']="";
		$data['u_disp']="";
		$data['pwd']="";	
		$data['h_flag']="list";

		$this->load->model("datamodel");
		$this->datamodel->table_name='t_activity';
		$this->datamodel->sql=" select * from t_activity ta ,p_profile1 pp where ta.profile_id=pp.code_id order by ta.code_id desc limit 0,50 ";   
		$data['omg']=$this->datamodel->list_data_sql();

		$this->load->view('login', $data);
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
        $this->functionhelper->jsonResponseFormSuccess('ออกจากระบบเรียบร้อยแล้ว', 'ท่านได้ออกจากระบบเรียบร้อยแล้ว', '',site_url('user/formLogin'));		
	}

	function isLogin(){	
			
		$user_name=$this->session->userdata('u_am_name');
		if($user_name==''){				
			$this->formLogin('w');
			return false;
		}else{			
			return $user_name;
		}
		
		//return "test";			
	}
}
