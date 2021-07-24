<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controllername extends CI_Controller
{

    public function index()
    {
    }

    public function update()
    {
        $id = $this->input->post('id_kendaraan');
        $foto = '';
        if (empty($_FILES['foto']['name'])) {
            $data = [
                "id_kendaraan" => $this->input->post('id_kendaraan'),
                "kode_kendaraan" => $this->input->post('kode_kendaraan'),
                "merk_kendaraan" => $this->input->post('merk_kendaraan'),
                "tipe_kendaraan" => $this->input->post('tipe_kendaraan'),
                "kategori_kendaraan" => $this->input->post('kategori_kendaraan'),
                "nopol" => $this->input->post('nopol'),
                "pj_kendaraan" => $this->input->post('pj_kendaraan'),
                "no_bpkb" => $this->input->post('no_bpkb'),
                "tanggal_peroleh" => $this->input->post('tanggal_peroleh')
            ];
            $where = array(
                'id_kendaraan' => $id
            );

            $this->Model_kendaraan->update_data($where, $data, 'tb_kendaraan');
        } else {
            $file_name = $_FILES['foto']['name'];
            $newfile_name = str_replace(' ', '', $file_name);
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';


            $newName = date('dmYHis') . $newfile_name;
            $config['file_name']         = $newName;
            $config['max_size']             = 5100;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
                if ($foto != "Tidak Ada Gambar") {
                    echo "Gambar Gagal Diupload! (Format Gambar:jpg/jpeg/png/gif)";
                }
                $this->upload->data('file_name');
                $data = [
                    "id_kendaraan" => $this->input->post('id_kendaraan'),
                    "kode_kendaraan" => $this->input->post('kode_kendaraan'),
                    "merk_kendaraan" => $this->input->post('merk_kendaraan'),
                    "tipe_kendaraan" => $this->input->post('tipe_kendaraan'),
                    "kategori_kendaraan" => $this->input->post('kategori_kendaraan'),
                    "nopol" => $this->input->post('nopol'),
                    "pj_kendaraan" => $this->input->post('pj_kendaraan'),
                    "no_bpkb" => $this->input->post('no_bpkb'),
                    "tanggal_peroleh" => $this->input->post('tanggal_peroleh'),
                    "foto" => $newName,
                    "keterangan" => $this->input->post('keterangan'),
                ];

                $where = array(
                    'id_kendaraan' => $id
                );
                $this->Model_kendaraan->update_data($where, $data, 'tb_kendaraan');
            } else {
                $error = array('error' => $this->upload->display_errors());
                return $this->session->set_flashdata('error', $error['error']);
            }
        }

        $keterangan = $this->input->post('keterangan');

        $this->session->set_flashdata('msg', 'Data Berhasil Di Update');
        redirect('Admin/Data_kendaraan/index');
    }
}

/* End of file Controllername.php */
