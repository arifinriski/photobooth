<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('IndexModel', 'index');
	}

	public function index()
	{
		$data['userdata']= $this->session->userdata("id_user");
		

		$this->load->view('home/layouts/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('home/layouts/footer', $data);

	}
	
	public function hitung()
	{
		$no = 0;
		$x['data_kriteria'] = $this->index->getkriteria();
   		$x['data_bobot_kriteria'] = $this->index->getbobot_kriteria();
		$x['data_alternative'] = $this->index->getalternative();
		//lama
		//$data['data_matriks'] = $this->index->getmatriks($id_tema);
		$x['data_matriks'] = $this->index->getmatriks();
		$x['data_normalisasi'] = $this->index->getnormalisasi();

		$data = $this->index->getmatriks();
		$data_normalisasi = $this->index->getnormalisasi();
		// $this->db->query('truncate table kriteria');
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
	    // var_dump($sd2);
	    // die;

	    if ($check > 0) {
	    	return $this->alertError('Maaf, data yang anda ingin masukan sudah ada dibulan sekarang', base_url('index'));
	    }else{
		for ($i=0; $i < count($sd2) ; $i++) { 
		    // var_dump($sd2[$i]['hitung']);
			
          $v[$i] = "insert into hasil (id_hasil,hitung,nama,bulan) values ('"."','".$sd2[$i]['hitung']."','".$sd2[$i]['nama']."','".$bulan."')";
          
	       $this->db->query($v[$i]);
		   
		 }
		
		}
		$this->load->view('home/layouts/header', $x);
		$this->load->view('home/order', $x);
		$this->load->view('home/layouts/footer', $x);
	}

	public function tambah_act()
	{
		$inp = $this->input->post('inp');

		$upload = $this->index->add($inp);
		
		if(!$upload==null){
			return $this->alertError('Anda telah berhasil order desain', base_url('index'));
		}else{
			return $this->alertError('Maaf, order desain anda gagal', base_url('index'));
		}
	}

	public function profile()
	{
		$data['userdata']= $this->session->userdata('id_customer');
		$this->load->view('home/layouts/header', $data);
		$this->load->view('home/profile', $data);
		$this->load->view('home/layouts/footer', $data);
	}

	public function gallery()
	{
		$data['userdata']= $this->session->userdata('id_customer');
		$this->load->view('home/layouts/header', $data);
		$this->load->view('home/gallery', $data);
		$this->load->view('home/layouts/footer', $data);
	}

	public function order()
	{
			 
		$data['userdata']= $this->session->userdata('id_customer');
	    $data['data_kriteria'] = $this->index->getkriteria();
   		$data['data_bobot_kriteria'] = $this->index->getbobot_kriteria();
		$data['data_alternative'] = $this->index->getalternative();
		//lama
		//$data['data_matriks'] = $this->index->getmatriks($id_tema);
		$data['data_matriks'] = $this->index->getmatriks();
		$data['data_normalisasi'] = $this->index->getnormalisasi();
	
		
		$this->load->view('home/layouts/header', $data);
		$this->load->view('home/order', $data);
		$this->load->view('home/layouts/footer', $data);
	}

	public function contact_us()
	{
		$data['userdata']= $this->session->userdata('id_customer');
		$this->load->view('home/layouts/header', $data);
		$this->load->view('home/contact_us', $data);
		$this->load->view('home/layouts/footer', $data);
	}

	public function register()
	{
		$this->load->view('home/register');
	}

	public function register_user()
	{
		$this->load->view('home/register_user');
	}

	public function login()
	{
		$session = $this->session->userdata('user_id');
		if ($session == '')
		{
			$this->load->view('home/index');
		}
		$this->load->view('home/login');
	}

	public function login_user()
	{

		$session = $this->session->userdata('id_customer');
		if ($session == '')
		{
			$this->load->view('home/index');
		}
		$this->load->view('home/login_user');
	}

	private function alertError($msg, $url){
		echo "<script>alert('".$msg."'); window.location = '".$url."'</script>";
	}

	public function post_register()
	{
		$data = [
			'email' => $this->input->post('email'),
			'nama' => $this->input->post('name'),
			'no_telp' => $this->input->post('no_telepon'),
			'password' => sha1($this->input->post('password')),
			'username' => $this->input->post('username'),
			'level_id' => 2
		];

		if($this->index->saveUserAdmin($data)){
			return $this->alertError('Akun anda telah berhasil terdaftar!', base_url('index/loginUser'));
		}else{
			return $this->alertError('Maaf, akun yang anda daftarkan Gagal', base_url('index/register'));
		}
	}

	public function post_register_user()
	{
		$data = [

			'email' => $this->input->post('email'),
			'nama' => $this->input->post('nama_customer'),
			'no_telp' => $this->input->post('no_telepon'),
			'password' => sha1($this->input->post('password')),
			'username' => $this->input->post('username'),
		];

		if($this->index->saveUserCustomer($data)){
			return $this->alertError('Akun anda telah berhasil terdaftar!', base_url('index/login_user'));
		}else{
			return $this->alertError('Maaf, akun yang anda daftarkan Gagal', base_url('index/register_user'));
		}
	}

	public function post_login()
	{	


		$data = array(
               'username' => $this->input->post('username'),
               'password' => sha1($this->input->post('password')),
             );
   
            $check = $this->index->auth_check_admin($data);
            
            if($check != false){
 
                 $user = array(
                 'id_user' => $check->id_user,
                 'email' => $check->email,
                 'username' => $check->username,
                 'nama' => $check->nama,
                 'no_telp' => $check->no_telp,
                 'status' => $check->status,
                );
  			$this->session->set_userdata($user);
  			$this->alertError('Berhasil Login', base_url('admin/dashboard'));
			}
			else{
				$this->alertError('Gagal Login', base_url('index/login'));
			}

	}


	public function loginUser(){
		$this->load->view("home/login.php");
	}


	public function prosesLoginUser(){
		$data = array(
               'username' => $this->input->post('username'),
               'password' => sha1($this->input->post('password'))
             );
		$check  = $this->index->authentication($data);

	    if($check != null){
             $user = array(
             'id_user' => $check->id_user,
             'nama_customer' => $check->nama,
             'email' => $check->email,
             'telepon' => $check->no_telp,
             'username' => $check->username,
            );
			$this->session->set_userdata($user);
			if ($check->level_id == 0) {
				$this->alertError('Berhasil Login', base_url('admin/dashboard'));
			}else{
				$this->alertError('Berhasil Login', base_url('index'));
			}
			die;
		} else{
			$this->alertError('Gagal Login', base_url('index/loginuser'));
		}

	}

	public function post_login_user()
	{	
		$data = array(
               'username' => $this->input->post('username'),
               'password' => sha1($this->input->post('password')),
             );
   
            $check = $this->index->auth_check($data);
            
            if($check != false){
 
                 $user = array(
                 'id_customer' => $check->id_customer,
                 'nama_customer' => $check->nama_customer,
                 'email' => $check->email,
                 'telepon' => $check->telepon,
                 'username' => $check->username,
                );
  			$this->session->set_userdata($user);
  			$this->alertError('Berhasil Login', base_url('index'));

			} else{
				$this->alertError('Gagal Login', base_url('index/login_user'));
			}
	}	
	public function logout()
	{	
		$this->session->sess_destroy();
		redirect('index','refresh');
	}
}

