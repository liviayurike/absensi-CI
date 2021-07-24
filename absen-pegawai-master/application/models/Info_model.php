<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Info_model extends CI_Model
{
    public function all()
    {
        $this->db->select('*');
        $this->db->from('Info');
        $this->db->order_by('Tanggal_Upload', 'DESC');

        return $this->db->get();
    }

    public function insert($data)
    {
        $this->db->insert('Info', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
