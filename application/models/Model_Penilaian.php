<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Penilaian extends CI_Model
{

    public function tampilpenilaian()
    {
        $query = "SELECT * FROM penilaian";

        return $this->db->query($query);

    }

    public function check()
    {
        return $this->db->query("SELECT * FROM penilaian ORDER BY id_kriteria");
    }

    public function edit($data,$id_penilaian){
         $this->db->update('penilaian',$data, array('id_penilaian' => $id_penilaian));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function delete($id_penilaian){
        $this->db->where('id_penilaian',$id_penilaian)->delete('penilaian');
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    
    // get total rows
     public function hitungkriteria()
    {
        $query = $this->db->get('penilaian');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    // insert data
    function insert($data)
    {
        $this->db->insert('penilaian', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    function view_pemenang()
    {
        return $this->db->query("SELECT * FROM rangking ORDER BY id_alternatif DESC LIMIT 1");
    }

}
