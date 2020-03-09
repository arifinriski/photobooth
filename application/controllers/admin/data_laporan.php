<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class data_laporan extends CI_Controller
{ 
function __construct()
{
    parent::__construct();   
    $this->load->model('lap_model');
}


  // function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model('lap_model');
  // }
  // // public function index()
  // {
  //   $data['title'] = "Cetak laporan";
  //   $data['data_laporan'] = $this->lap_model->getall();
  //   $v_content['content'] = $this->load->view('admin/inc/v_data_laporan/v_data_laporan_index', $data, true);

  //   $this->load->view('admin/body', $v_content);
  // }

  // public function index()
  // {
  //   $data['title'] = "Cetak laporan Order Desain";
  //   $data['bulan'] =  $this->db->get('order_desain')->result();

  //   // redirect('laporan/filter');
  //   $v_content['content'] = $this->load->view('admin/inc/laporan/filter', $data, true);
  // }

  // public function index()
  // {
  //   $this->load->library('mypdf');
  //   $data['data'] 
  // }
  public function index()
  {
    // $tipe = $this->input->get('tipe');
    $data['out'] = $this->lap_model->datalaporan();
    $this->load->library('Mypdf');
    $this->mypdf->generate('admin/inc/v_data_laporan/data_cetak', $data, 'laporan-penjualan', 'A4', 'portrait');
    $this->load->render();
    $this->pdf->stream('skripsi.pdf');
  }


}
