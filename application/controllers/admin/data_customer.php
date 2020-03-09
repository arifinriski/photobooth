<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_customer extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}

	public function index()
	{
		$data['title']   = "Data Customer";
		$data['data_customer'] = $this->Customer_model->getall();
		$data['tambah'] = "data_customer/tambah";
		$data['delete'] = "data_customer/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_customer/v_data_customer_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function tambah()
	{
		$data['title']	= "Data Customer";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_customer/v_data_customer_tambah', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');
		$upload = $this->Customer_model->add($inp);
		
		redirect('admin/data_customer');
	}

	public function edit($param)
	{
		$data['title']	= "Data Customer";
		$data['param'] = $param;
		$data['val'] = $this->Customer_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_customer/v_data_customer_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->Customer_model->edit($param, $inp);
		
		redirect('admin/data_customer');
	}

	public function delete($param)
	{
		$this->Customer_model->delete($param);

		redirect('admin/data_customer');
	}
}
