<?php
/**
* 
*/
class Order_Desain_Model extends CI_Model
{
	private $table = 'order_desain';
	private $id    = 'id';
	
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
		$sql = 
		"SELECT order_desain.id AS id, tema_desain.nama AS tema_desain, jenis_desain.nama AS jenis_desain, ukuran.nama AS ukuran, order_desain.deskripsi AS deskripsi, order_desain.lokasi_event AS lokasi_event, order_desain.tanggal_event AS tanggal_event, tema_desain.gambar AS gambar, users.nama AS nama_customer FROM order_desain, tema_desain, jenis_desain, ukuran, users WHERE order_desain.id_tema = tema_desain.id_tema AND order_desain.id_jenis = jenis_desain.id_jenis AND order_desain.id_ukuran = ukuran.id_ukuran and order_desain.id_customer = users.id_user";

		$data = $this->db->query($sql);

		return $data->result_array();
	}


	public function get_by_id($id)
    {
        $this->db->from('order_desain');
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    function getbyid($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row_array();;
	}

	// public function edit($id, $item) {
 //        $this->db->where('id', $id);
 //        $this->db->update('desain', $item);
	// 	return $this->db->affected_rows();
	// }

	function edit($id, $item)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $item);
	}

	function countall()
	{
		return $this->db->count_all($this->table);
	}

	function add($item)
	{
		$this->db->insert($this->table, $item);
		return $this->db->insert_id();
	}

	function addorder($inp)
	{
		$this->db->insert($this->table, $item);
		return $this->db->insert_id();
	}

	function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	}

	// function getkriteria()
	// {
	// 	$sql = "SELECT id_kriteria,kriteria,nilai_atribut FROM kriteria";
	// 	$data = $this->db->query($sql);
	// 	return $data->result_array();
	// }

	
/**-----------------------------------------------------------------------**/

}
?>