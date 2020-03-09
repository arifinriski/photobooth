<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_order_desain extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('order_desain_model');
		  // load form and url helpers
        $this->load->helper(array('form', 'url', 'file'));
         
        // load form_validation library
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title']   = "Data Order Desain";
		$data['data_order_desain'] = $this->order_desain_model->getall();
		
		$data['tambah'] = "data_order_desain/tambah";
		$data['delete'] = "data_order_desain/delete/";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_order_desain/v_data_order_desain_index', $data, true);

		$this->load->view('admin/body',$v_content);
	}

	public function tambah()
	{
		$data['title']	= "Data Order Desain";
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_order_desain/v_data_order_desain_tambah', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');
		$upload = $this->order_desain_model->add($inp);
		
		redirect('admin/data_order_desain');
	}

	public function edit($param)
	{
		$data['title']	= "Data Order Desain";
		$data['param'] = $param;
		$data['val'] = $this->order_desain_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_order_desain/v_data_order_desain_edit', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

	public function edit_act($param)
	{
		$inp = $this->input->post('inp');
		$upload = $this->order_desain_model->edit($param, $inp);
		
		redirect('admin/data_order_desain');
	}

	public function laporan($param)
	{
		$this->load->model('User_model');
		$data['title']	= "Data Order Desain";
		$data['param'] 	= $param;
		$data['val'] 	= $this->User_model->getbyid($param);
		
		$v_content['content'] = $this->load->view('admin/inc/v_data_order_desain/v_data_order_desain_laporan', $data, true);

		$this->load->view('admin/body', $v_content);	
	}

    private function _do_upload()
    {
        $config['upload_path']          = 'assets/template/img/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) //upload and validate
        {
            $data['inputerror'][] = 'gambar';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

	public function delete($param)
	{
		$this->order_desain_model->delete($param);

		redirect('admin/data_order_desain');
	}

   
}
