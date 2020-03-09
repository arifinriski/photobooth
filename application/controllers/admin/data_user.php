<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title']   = "Data User";
		$data['data_user'] = $this->User_model->getall();
		$data['tambah'] = "data_user/tambah";
		$data['delete'] = "data_user/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_user/v_data_user_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function tambah()
	{
		$data['title']	= "Data User";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_user/v_data_user_tambah', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');
		$upload = $this->User_model->add($inp);
		
		redirect('admin/data_user');
	}

	public function edit($param)
	{
		$data['title']	= "Data User";
		$data['param'] = $param;
		$data['val'] = $this->User_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_user/v_data_user_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->User_model->edit($param, $inp);
		
		redirect('admin/data_user');
	}

	public function delete($param)
	{
		$this->User_model->delete($param);

		redirect('admin/data_user');
	}
}
