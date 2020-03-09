<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_tema_desain extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Tema_desain_model');
	}

	public function index()
	{
		$data['title']   = "Data Tema Desain";
		$data['data_tema_desain'] = $this->Tema_desain_model->getall();
		$data['tambah'] = "data_tema_desain/tambah";
		$data['delete'] = "data_tema_desain/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_tema_desain/v_data_tema_desain_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function tambah()
	{
		$data['title']	= "Data Jadwal";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_tema_desain/v_data_tema_desain_tambah', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');
		$upload = $this->Tema_desain_model->add($inp);
		
		redirect('admin/data_tema_desain');
	}

	public function edit($param)
	{
		$data['title']	= "Data Tema Desain";
		$data['param'] = $param;
		$data['val'] = $this->Tema_desain_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_tema_desain/v_data_tema_desain_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->Tema_desain_model->edit($param, $inp);
		
		redirect('admin/data_tema_desain');
	}

	public function delete($param)
	{
		$this->Tema_desain_model->delete($param);

		redirect('admin/data_tema_desain');
	}
}
