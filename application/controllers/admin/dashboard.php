<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Dashboard_model');
	}

	public function index()
	{
		$data['title']  = "Dashboard";
		$data['total_usr'] = $this->Dashboard_model->hitungJumlahUsr();
		$data['total_cst'] = $this->Dashboard_model->hitungJumlahCustomer();
		$data['total_ordr_dsn'] = $this->Dashboard_model->hitungJumlahOrderDesain();
		$data['total_tm_dsn'] = $this->Dashboard_model->hitungJumlahTemaDesain();
		$data['total_tm'] = $this->Dashboard_model->hitungJumlahTema();
		$data['total_jns_dsn'] = $this->Dashboard_model->hitungJumlahJenisDesain();
		$data['total_krt'] = $this->Dashboard_model->hitungJumlahKriteria();

		$v_content['content'] = $this->load->view('admin/inc/v_dashboard', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
