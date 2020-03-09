<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_hasil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hasil_model');
	}
	public function index()
	{
		$data['title']   = "Data Proses Rekomendasi";
		$data['hasil_model'] = $this->hasil_model->getall();
		
		$data['tambah'] = "hasil_model/tambah";
		$data['delete'] = "hasil_model/delete/";

		$data['data_kriteria'] = $this->hasil_model->getkriteria();
   		$data['data_bobot_kriteria'] = $this->hasil_model->getbobot_kriteria();
		$data['data_alternative'] = $this->hasil_model->getalternative();
		$data['data_matriks'] = $this->hasil_model->getmatriks();
		$data['data_normalisasi'] = $this->hasil_model->getnormalisasi();
		$v_content['content'] = $this->load->view('admin/inc/v_proses/v_proses_data', $data, true);

		$this->load->view('admin/body',$v_content);
		if(isset($_POST['proses_rekomendasi'])){
		$data = $this->hasil_model->getmatriks();
		$data_normalisasi = $this->hasil_model->getnormalisasi();
		foreach($data as $dm){
	      //MEMBUAT ARRAY UNTUK DIPROSES
	      $dt1[] = array(floatval($dm->C1));
	      $dt2[] = array(floatval($dm->C2));
	      $dt3[] = array(floatval($dm->C3));
	      $dt4[] = array(floatval($dm->C4));
	      $dt5[] = array(floatval($dm->C5));
	    }
	    foreach ($data as $matrs){
        //MELEPAS ARRAY UNTUK AMBIL NILAI MIN DAN MAX
        $normal1 = implode(min($dt1));
        $normal2 = implode(max($dt2));
        $normal3 = implode(min($dt3));
        $normal4 = implode(min($dt4));
        $normal5 = implode(max($dt5));
        }
        //MENGHITUNG NILAI NORMALISASI PER KRITERIA
        foreach ($data as $matrs){
        $pros1 = floatval($normal1/$matrs->C1);
        $pros2 = floatval($matrs->C2/$normal2);
        $pros3 = floatval($normal3/$matrs->C3);
        $pros4 = floatval($normal4/$matrs->C4);
        $pros5 = floatval($matrs->C5/$normal5);

        //MEMBUAT ARRAY UNTUK PEMANGGILAN DATA
        $ps1 = array($pros1);
        $ps2 = array($pros2);
        $ps3 = array($pros3);
        $ps4 = array($pros4);
        $ps5 = array($pros5);
   		
   		// $sd[] = array(
   		// 	"hitung" => round(($ps1[0]*$dt1[0])),
   		// 	"nama" => ($matrs->nama)
   		// );	
	     foreach ($data_normalisasi as $value){ 
         $sd2[] = array(
          "hitung" => round(($ps1[0]*$value['B1'])+($ps2[0]*$value['B2'])+($ps3[0]*$value['B3'])+($ps4[0]*$value['B4'])+($ps5[0]*$value['B5']),2),
          "nama" => ($matrs->nama)
          );
    	  rsort($sd2);
    	}

	    // die;
		}
		$bulan = date('F');
	    $sql = $this->db->query("SELECT bulan from hasil where bulan='$bulan'");
	    $check = $sql->num_rows();
	    if ($check > 0) {
	    	// return $this->alertError('Maaf, anda sudah melakukan proses rekomendasi dibulan ini');
			echo '<script>alert("Maaf, anda sudah melakukan proses rekomendasi dibulan ini");</script>';
			redirect ('admin/dashboard', 'refresh');
	    }else{
		for ($i=0; $i < count($sd2) ; $i++) { 
		    // var_dump($sd2[$i]['hitung']);
			
          $v[$i] = "insert into hasil (id_hasil,hitung,nama,bulan) values ('"."','".$sd2[$i]['hitung']."','".$sd2[$i]['nama']."','".$bulan."')";
          
	       $this->db->query($v[$i]);
		  } 
		  echo '<script>alert("Data Berhasil Ditambahkan!");</script>';
		  redirect('admin/dashboard', 'refresh');
		 }
		}
	      // return $this->alertError('Data Berhasil Ditambahkan');
	}
}