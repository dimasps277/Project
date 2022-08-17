<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_guru extends CI_Model
{

    public function tampilguru()
    {
        $query = "SELECT * FROM guru";

        return $this->db->query($query);

    }

    public function edit($data,$id_guru){
         $this->db->update('guru',$data, array('id_guru' => $id_guru));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function delete($id_guru){
        $this->db->where('id_guru',$id_guru)->delete('guru');
		$this->db->where('id_guru',$id_guru)->delete('penilaian');
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    
    // get total rows
     public function hitungguru()
    {
        $query = $this->db->get('guru');
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
        $this->db->insert('guru', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

}
