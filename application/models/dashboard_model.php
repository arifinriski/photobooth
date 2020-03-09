<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

  	public function hitungJumlahUsr(){   
      $query = $this->db->get('user');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitungJumlahCustomer(){   
      $query = $this->db->get('customer');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitungJumlahOrderDesain(){   
      $query = $this->db->get('order_desain');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitungJumlahTemaDesain(){   
      $query = $this->db->get('tema_desain');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

   public function hitungJumlahTema(){   
      $query = $this->db->get('tema');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

   public function hitungJumlahJenisDesain(){   
      $query = $this->db->get('jenis_desain');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitungJumlahKriteria(){   
      $query = $this->db->get('kriteria');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */