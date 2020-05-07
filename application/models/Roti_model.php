<?php

class roti_model extends CI_model
{
    public function data_roti()
    {
        return $this->db->get('roti')->result_array();
    }

    public function data_roti_promo()
    {
        return $this->db->get_where('roti', array('special' => "Promo"))->result_array();
    }

    public function data_roti_random()
    {
        return $this->db->get_where('roti', array('special' => "Random"))->result_array();
    }

    public function data_roti_best()
    {
        return $this->db->get_where('roti', array('special' => "best"))->result_array();
    }

    public function data_roti_role()
    {
        return $this->db->get('roti_role')->result_array();
    }

    public function data_special_role()
    {
        return $this->db->get('special_role')->result_array();
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

    public function data_rotibyid($id)
    {
        return $this->db->get_where('roti', ['id_roti' => $id])->row_array();
    }

    public function edit_roti($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_jenis($jenis)
    {
        return $this->db->get_where('roti', ['jenis_roti' => $jenis])->result_array();
    }
}
