<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_jenis_desain extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_desain_model');
	}

	public function index()
	{
		$data['title']   = "Data Jenis Desain";
		$data['data_jenis_desain'] = $this->jenis_desain_model->getall();
		$data['tambah'] = "data_jenis_desain/tambah";
		$data['delete'] = "data_jenis_desain/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_jenis_desain/v_data_jenis_desain_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function tambah()
	{
		$data['title']	= "Data Jenis Desain";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_jenis_desain/v_data_jenis_desain_tambah', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');
		$upload = $this->jenis_desain_model->add($inp);
		
		redirect('admin/data_jenis_desain');
	}

	public function edit($param)
	{
		$data['title']	= "Data Jenis Desain";
		$data['param'] = $param;
		$data['val'] = $this->jenis_desain_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_jenis_desain/v_data_jenis_desain_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->jenis_desain_model->edit($param, $inp);
		
		redirect('admin/data_jenis_desain');
	}

	public function delete($param)
	{
		$this->jenis_desain_model->delete($param);

		redirect('admin/data_jenis_desain');
	}
}
