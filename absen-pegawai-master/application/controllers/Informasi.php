<?php
defined('BASEPATH') or die('No direct script access allowed!');

class Informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        $this->load->model('Informasi_model', 'informasi');
    }

    public function index()
    {
        $data['informasi'] = $this->informasi->get_all();
        return $this->template->load('template', 'informasi/index', $data);
    }

    public function create()
    {
        $this->load->model('Informasi_model', 'informasi');
        $data['informasi'] = $this->informasi->get_all();
        return $this->template->load('template', 'informasi/create', $data);
    }

    public function store()
    {
        $judul_info = $this->input->post('judul_info');
        $isi = $this->input->post('isi');
        $file = $_FILES['file'];

        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|png|pdf|doc|docx';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                // echo "Upload file gagal";
                //die();
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('informasi/create', $error);
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul_info'    => $judul_info,
            'isi'           => $isi,
            'file'          => $file
        );

        $result = $this->informasi->insert_data($data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Informasi telah ditambahkan!'
            ];
            $redirect = 'informasi/';
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data Informasi gagal ditambahkan'
            ];
            $redirect = 'informasi/create';
        }

        $this->session->set_flashdata('response', $response);
        redirect($redirect);
    }

    public function edit()
    {
        $id_info = $this->uri->segment(3);
        $data['informasi'] = $this->informasi->find($id_info);
        return $this->template->load('template', 'informasi/edit', $data);
    }

    public function update()
    {
        $id_info = $this->uri->segment(3);
        $judul_info = $this->input->post('judul_info');
        $isi = $this->input->post('isi');
        $file = $_FILES['file'];

        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|png|pdf|doc|docx';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                //echo "Upload file gagal";
                //die();
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('informasi/edit', $error);
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $where = array('id_info' => $id_info);
        $data = array(
            'judul_info'    => $judul_info,
            'isi'           => $isi,
            'file'          => $file
        );

        $result = $this->informasi->update_data($where['id_info'], $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Informasi berhasil diubah!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data Informasi gagal diubah!'
            ];
        }

        $this->session->set_flashdata('response', $response);
        redirect('informasi');
    }



    // public function destroy()
    // {
    //     $id_info = $this->uri->segment(3);
    //     $result = $this->karyawan->delete_data($id_info);
    //     if ($result) {
    //         $response = [
    //             'status' => 'success',
    //             'message' => 'Data karyawan berhasil dihapus!'
    //         ];
    //     } else {
    //         $response = [   
    //             'status' => 'error',
    //             'message' => 'Data karyawan gagal dihapus!'
    //         ];
    //     }

    //     header('Content-Type: application/json');
    //     echo $response;
    // }
}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Informasi.php */