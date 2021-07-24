<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        // Load models
        $this->load->model('info_model');

        // Load helpers
        $this->load->helper('url');

        // Load libraries
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['uploads'] = $this->info_model->all();
        return $this->template->load('template', 'info', $data);
    }

    public function upload()
    {
        $config['upload_path'] = './upload';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'nama_file' => $fileData['file_name'],
                'tipe_file' => $fileData['file_type'],
                'ukuran_file' => $fileData['file_size'],
            ];

            if ($this->info_model->insert($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>' . $fileData['file_name'] . '</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File ' . $fileData['file_name'] . ' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('Info'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('Info'));
        }
    }
}
