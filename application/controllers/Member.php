<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{

	public function index(){
		$this->load->model('Member_model');
		$member = $this->Member_model->get();
		
		$content['data'] = $member;
		$content['content'] = "member/table";
		$this->load->view('app_view',$content);
	}
}