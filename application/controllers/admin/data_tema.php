<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_tema extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Tema');
  }

  public function index()
  {
    $data['title']   = "Data Tema";
    $data['data_tema'] = $this->Tema->getall();
    $data['delete'] = "data_tema/delete/";
    
    $v_content['content'] = $this->load->view('admin/inc/v_tema/v_tema_index', $data, true);

    $this->load->view('admin/body',$v_content);
  }

  

  public function edit($param)
  {
    $data['title']  = "Data Tema";
    $data['param'] = $param;
    $data['val'] = $this->Tema->getbyid($param);
    
    $v_content['content'] = $this->load->view('admin/inc/v_tema/v_tema_edit', $data, true);

    $this->load->view('admin/body', $v_content);  
  }

  public function edit_act($param)
  {
    $inp = $this->input->post('inp');
    $upload = $this->Tema->edit($param, $inp);
    
    redirect('admin/data_tema');
  }

  public function delete($param)
  {
    $this->Kriteria_model->delete($param);

    redirect('admin/data_tema');
  }
}



//    // --- Tema
//   public function addTema(){
//     return $this->view('addTema');
//   }

//   public function insertTema(){
    
//     $harga = $this->model('Tema')->insert([
//       "nama" => $_POST['nama']
//     ])->lastId()->execute();

//     $harga = $this->model('Harga')->insert([
//       "id_tema" => $tema,
//       "sangatmahal" => $_POST['sangatmahal'],
//       "mahal"  => $_POST['mahal'],
//       "sedang" => $_POST['sedang'],
//       "murah"  => $_POST['murah'],
//       "sangatmurah"  => $_POST['sangatmurah']
//     ])->execute();

//     $layanan = $this->model('Layanan')->insert([
//       "id_tema" => $tema,
//       "sangatbaik" => $_POST['sangatbaik'],
//       "baik"  => $_POST['baik'],
//       "cukupbaik" => $_POST['cukupbaik'],
//       "kurangbaik"  => $_POST['kurangbaik'],
//       "tidakbaik"  => $_POST['tidakbaik']
//     ])->execute();

//     // $waktu = $this->model('Waktu')->insert([
//     //   "id_tema"  => $tema,
//     //    "sangatbaik" => $_POST['sangatbaik'],
//     //   "baik"  => $_POST['baik'],
//     //   "cukupbaik" => $_POST['cukupbaik'],
//     //   "kurangbaik"  => $_POST['kurangbaik'],
//     //   "tidakbaik"  => $_POST['tidakbaik']
//     // ])->execute();

//     // $nilai = $this->model('Nilai')->insert([
//     //   "id_prodi" => $prodi,
//     //   "matematika" => $_POST['matematika'],
//     //   "fisika"     => $_POST['fisika'],
//     //   "kimia"      => $_POST['kimia'],
//     //   "biologi"    => $_POST['biologi'],
//     //   "tik"        => $_POST['tik'],
//     //   "bahasa_inggris"   => $_POST['bahasa_inggris'],
//     //   "bahasa_indonesia" => $_POST['bahasa_indonesia']
//     // ])->execute();
    
//     $this->redirect('daftarTema');
//   }

//   public function daftarTema(){
//     $tema = $this->model('Tema')->select()->orderBy('nama', 'ASC')->execute();
//     return $this->view('daftarTema', ['tema' => $tema]);
//   }

//   public function editTema($id){
//     $tema   = $this->model('Tema')->select()->where('id', $id)->execute();
//     $waktu = (array) $this->model('Waktu')->select()->where('id_tema', $id)->execute();
//     $layanan   = (array) $this->model('Layanan')->select()->where('id_tema', $id)->execute();
//     // $nilai   = (array) $this->model('Nilai')->select()->where('id_prodi', $id)->execute();
//     $harga = (array) $this->model('Harga')->select()->where('id_tema', $id)->execute();
//     return $this->view('editTema', ['tema' => $tema, 'layanan' => $layanan, 'waktu' => $waktu, 'harga' => $harga]);
//   }

//   public function updateTema($id){
//     $tema = $this->model('Tema')->update([
//       "nama"    => $_POST['nama'],
//     ])->where('id', $id)->execute();

//     $layanan = $this->model('Layanan')->update([
//       "sangatbaik" => $_POST['sangatbaik'],
//       "baik"  => $_POST['baik'],
//       "cukupbaik" => $_POST['cukupbaik'],
//       "kurangbaik"  => $_POST['kurangbaik'],
//       "tidakbaik"  => $_POST['tidakbaik']
//     ])->where('id_tema', $id)->execute();

//     // $waktu = $this->model('Waktu')->update([
//     //   "sangatbaik" => $_POST['sangatbaik'],
//     //   "baik"  => $_POST['baik'],
//     //   "cukupbaik" => $_POST['cukupbaik'],
//     //   "kurangbaik"  => $_POST['kurangbaik'],
//     //   "tidakbaik"  => $_POST['tidakbaik']
//     // ])->where('id_tema', $id)->execute();

//     // $nilai = $this->model('Nilai')->update([
//     //   "matematika" => $_POST['matematika'],
//     //   "fisika"     => $_POST['fisika'],
//     //   "kimia"      => $_POST['kimia'],
//     //   "biologi"    => $_POST['biologi'],
//     //   "tik"        => $_POST['tik'],
//     //   "bahasa_inggris"   => $_POST['bahasa_inggris'],
//     //   "bahasa_indonesia" => $_POST['bahasa_indonesia']
//     // ])->where('id_prodi', $id)->execute();

//     $harga = $this->model('Harga')->update([
//      "sangatmahal" => $_POST['sangatmahal'],
//       "mahal"  => $_POST['mahal'],
//       "sedang" => $_POST['sedang'],
//       "murah"  => $_POST['murah'],
//       "sangatmurah"  => $_POST['sangatmurah']
//     ])->where('id_tema', $id)->execute();

//     $this->redirect('daftarTema');
//   }

//   public function deleteTema($id){
//     $prodi   = $this->model('Tema')->delete()->where('id', $id)->execute();
//     $this->redirect('daftarTema');
//   }
  
// }