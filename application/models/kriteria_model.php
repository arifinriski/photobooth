<?php
/**
* 
*/
class Kriteria_Model extends CI_Model
{
	private $table = 'kriteria';
	private $id    = 'id_riteria';
	
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

/**-----------------------------------------------------------------------**/

}
?>