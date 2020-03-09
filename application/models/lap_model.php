<?php
/**
* 
*/
class Lap_model extends CI_Model
{
	private $table = 'tema_desain';
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

	function getbyid($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row_array();;
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

	function edit($id, $item)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $item);
	}

	function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	}
	function datalaporan()
	{
	  $this->db->select('
          order_desain.*,customer.nama_customer as nama_cus, tema_desain.nama as nama_des,  jenis_desain.nama as nama_jes, ukuran.nama as nama_uku
          ');

      $this->db->join('customer', 'customer.id_customer = order_desain.id_customer');
      $this->db->join('tema_desain', 'tema_desain.id_tema = order_desain.id_tema');
      $this->db->join('jenis_desain', 'jenis_desain.id_jenis = order_desain.id_jenis');
      $this->db->join('ukuran', 'ukuran.id_ukuran = order_desain.id_ukuran');
      // $this->db->where('order_desain.bulan',$bulan);
      $this->db->from('order_desain');
      $query = $this->db->get();
      return $query->result();
	}
/**-----------------------------------------------------------------------**/

}
?>