<?php
/**
* 
*/
class hasil_model extends CI_Model
{
	private $table = 'saw_hasil';
	private $id    = 'id_tema';
	
	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

/**-----------------------------------------------------------------------**/
	
	function getall()
	{
		return $this->db->get($this->table)->result_array();
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
function getmatriks()
  {
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
}
?>