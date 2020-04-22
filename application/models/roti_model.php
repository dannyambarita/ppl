<?php

class roti_model extends CI_model
{
    public function data_roti()
    {
        return $this->db->get('roti')->result_array();
    }

    public function data_roti_role()
    {
        return $this->db->get('roti_role')->result_array();
    }

    function hapus_data($id)
    {
        $this->db->where('id_roti', $id);
        $this->db->delete('roti');
    }

    function hapus_data_role($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('roti_role');
    }
}
