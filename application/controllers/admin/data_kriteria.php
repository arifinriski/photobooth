<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_kriteria extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
	}

	public function index()
	{
		$data['title']   = "Data Kriteria";
		$data['data_kriteria'] = $this->Kriteria_model->getall();
		$data['delete'] = "data_kriteria/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_kriteria/v_data_kriteria_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	

	public function edit($param)
	{
		$data['title']	= "Data Kriteria";
		$data['param'] = $param;
		$data['val'] = $this->Kriteria_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_kriteria/v_data_kriteria_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->Kriteria_model->edit($param, $inp);
		
		redirect('admin/data_kriteria');
	}

	public function delete($param)
	{
		$this->Kriteria_model->delete($param);

		redirect('admin/data_kriteria');
	}
}
