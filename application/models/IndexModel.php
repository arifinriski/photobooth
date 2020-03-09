<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexModel extends CI_Model {

  private $table = 'order_desain';
  private $id    = 'id';
  
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function saveUserAdmin($data){
		return $this->db->insert('users', $data);
	}

	public function saveUserCustomer($data){
		return $this->db->insert('customer', $data);
	}

	public function checkLoginAdmin($username, $password)
	{
		return $this->db->get_where('users', ['username' => $username, 'password' => $password])->row_array();
	}

	public function auth_check_admin($data)
    {
        $query = $this->db->get_where('user', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }

    public function authentication($data){
      $query = $this->db->get_where('users',$data);
      return $query->row();
    }

	public function auth_check($data)
    {
        $query = $this->db->get_where('customer', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }

    function add($item)
	{
		$this->db->insert($this->table, $item);
		return $this->db->insert_id();
	}
    
    function getkriteria()
	{
		$sql = "SELECT * FROM kriteria";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function getbobot_kriteria()
	{
		$sql = 
		"SELECT kriteria, bobot FROM kriteria ORDER BY id_kriteria";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function getalternative()
	{
		$sql = 
		"SELECT
          a.id_tema,
          b.nama,
          SUM(IF(a.id_kriteria=1,a.nilai,0)) AS C1,
          SUM(IF(a.id_kriteria=2,a.nilai,0)) AS C2,
          SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C3,
          SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C4,
          SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C5
        FROM
          saw_hasil a
          JOIN tema_desain b USING(id_tema)
        GROUP BY a.id_tema
        ORDER BY a.id_tema;";		
		$data = $this->db->query($sql);
		return $data->result();
	}

/*lama	
function getmatriks($id_tema)
  {
    $sql =
    "SELECT a.id_tema,b.nama,
          SUM(IF(a.id_kriteria=1,a.nilai,0)) AS C1,
          SUM(IF(a.id_kriteria=2,a.nilai,0)) AS C2,
          SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C3,
          SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C4,
          SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C5
        FROM
          saw_hasil a
          JOIN tema_desain b USING(id_tema)
          where id_tema=?
        GROUP BY a.id_tema
        ORDER BY a.id_tema ";
        $data = $this->db->query($sql,$id_tema);
    return $data->result();
  }
  */

  // public function getmatriks()
  // {
  //   $this->db->select_max('nilai');
  //   $query = $this->db->get('saw_hasil');
  //   return $query->result();
  // }

  function getmatriks()
  {
    $CD = "SELECT MIN(nilai) AS Cd
    FROM saw_hasil";
    // $data = $this->db->query($CD)->result();
      
    $sql =
    "SELECT a.id_tema,b.nama,
          SUM(IF(a.id_kriteria=1,a.nilai,0)) AS C1,
          SUM(IF(a.id_kriteria=2,a.nilai,0)) AS C2,
          SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C3,
          SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C4,
          SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C5
        FROM
          saw_hasil a
          JOIN tema_desain b USING(id_tema)
        GROUP BY a.id_tema
        ORDER BY a.id_tema ";
        
        $data = $this->db->query($sql);
    return $data->result();
    var_dump($data);
        die;
  }

  public function cekdata($bulan)
  {
    
  }

  public function getnormalisasi()
  {
    $sql = "SELECT 
           SUM(IF(id_kriteria=1,bobot,0)) AS B1,
            SUM(IF(id_kriteria=2,bobot,0)) AS B2,
            SUM(IF(id_kriteria=3,bobot,0)) AS B3,
            SUM(IF(id_kriteria=4,bobot,0)) AS B4,
            SUM(IF(id_kriteria=5,bobot,0)) AS B5
    FROM kriteria";
    $data = $this->db->query($sql);

    return $data->result_array();
  }

	// function getnormalisasi()
 //  {
 //    // $sql =
 //    // "SELECT
 //  //         a.id_tema,
 //  //         SUM(
 //  //           IF(a.id_kriteria=1,
 //  //             IF(
 //  //              b.nilai_atribut='Biaya',
 //  //  a.nilai,a.nilai),0)
 //  //             ) 
 //  //             AS C1,
 //          // SUM(
 //          //   IF(
 //          //     a.id_kriteria=2,
 //          //     IF(
 //          //       b.nilai_atribut='Keuntungan',
 //          //       a.nilai/,
 //          //       /a.nilai)
 //          //      ,0)
 //          //    ) AS C2,
 //          // SUM(
 //          //   IF(
 //          //     a.id_kriteria=3,
 //          //     IF(
 //          //       b.nilai_atribut='Biaya',
 //          //       a.nilai/,
 //          //       /a.nilai)
 //          //      ,0)
 //          //    ) AS C3,
 //          // SUM(
 //          //   IF(
 //          //     a.id_kriteria=4,
 //          //     IF(
 //          //       b.nilai_atribut='Biaya',
 //          //       a.nilai/,
 //          //       /a.nilai)
 //          //      ,0)
 //          //    ) AS C4,
 //        //   SUM(
 //        //     IF(
 //        //       a.id_kriteria=5,
 //        //       IF(
 //        //         b.nilai_atribut='Keuntungan',
 //        //         a.nilai/,
 //        //         /a.nilai)
 //        //        ,0)
 //        //      ) AS C5
 //        // FROM
 //        //   saw_hasil a
 //        //   JOIN kriteria b USING(id_kriteria)
 //        // GROUP BY a.id_tema
 //        // ORDER BY a.id_tema
 //  //      ";

 //    $sql = "SELECT
 //          a.id_tema,
 //          SUM(
 //            IF(a.id_kriteria=1,
 //              IF(b.nilai_atribut='Biaya',a.nilai,a.nilai),0)
 //              ) 
 //              AS C1,

 //              SUM(
 //            IF(
 //              a.id_kriteria=2,
 //              IF(
 //                b.nilai_atribut='Keuntungan',
 //                a.nilai,
 //                a.nilai)
 //               ,0)
 //             ) AS C2,
 //             SUM(
 //            IF(
 //              a.id_kriteria=3,
 //              IF(
 //                b.nilai_atribut='Biaya',
 //                a.nilai,
 //                a.nilai)
 //               ,0)
 //             ) AS C3,
 //              SUM(
 //            IF(
 //              a.id_kriteria=4,
 //              IF(
 //                b.nilai_atribut='Biaya',
 //                a.nilai,
 //                a.nilai)
 //               ,0)
 //             ) AS C4,
 //              SUM(
 //            IF(
 //              a.id_kriteria=5,
 //              IF(
 //                b.nilai_atribut='Keuntungan',
 //                a.nilai,
 //                a.nilai)
 //               ,0)
 //             ) AS C5
 //        FROM
 //          saw_hasil a
 //          JOIN kriteria b USING(id_kriteria)
 //        GROUP BY a.id_tema
 //        ORDER BY a.id_tema";
 //       $data = $this->db->query($sql);
 //    return $data->result_array();
 //  }

}