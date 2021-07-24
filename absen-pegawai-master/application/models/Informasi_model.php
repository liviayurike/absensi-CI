<?php
defined('BASEPATH') or die('No direct script access allowed!');

class Informasi_model extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->get('informasi');
        return $result->result();
    }

    public function find($id)
    {
        $this->db->where('id_info', $id);
        $result = $this->db->get('informasi');
        return $result->row();
    }

    public function insert_data($data)
    {
        $result = $this->db->insert('informasi', $data);
        if ($result) {
            $new_id = $this->db->insert_id();
            $data = $this->find($new_id);
            return $data;
        }
        return $result;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_info', $id);
        $result = $this->db->update('informasi', $data);
        if ($result) {
            $data = $this->find($id);
            return $data;
        }
        return $result;
    }

    public function delete_data($id)
    {
        $this->db->where('id_info', $id);
        $result = $this->db->delete('informasi');
        return $result;
    }
}

/* End of File: d:\Ampps\www\project\absen-pegawai\application\models\Karyawan_model.php */