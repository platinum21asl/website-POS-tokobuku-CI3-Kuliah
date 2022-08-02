<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level extends CI_Controller
{
    public function __construct()
    {
        // load model, helper dan library
        parent::__construct();
        $this->load->model('Level_model');
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $data['level'] = $this->Level_model->level_getAll();
        $this->load->view('admin/level/level', $data);
    }

    public function add()
    {
        $nama = strip_tags($this->input->post('i_nama'));
        // input array

        $data = [
            'name' => $nama

        ];

        // Insert ke database
        $x = $this->Level_model->level_cek($nama);
        if ($x == null) {
            $this->Level_model->level_insert('level', $data);
            echo '<script language=JavaScript>alert("Input Berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Level telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function update($id)
    {
        $data['level'] = $this->Level_model->level_getById($id);
        $nama = strip_tags($this->input->post('i_nama'));


        // Input Array
        $data = [
            'name' => $nama

        ];
        // Insert ke database
        $x = $this->Level_model->level_cek($nama);

        if ($x == null) {
            $this->Level_model->level_update($id, 'level', $data);
            echo '<script language=JavaScript>alert("UPDATE berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Book Category telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function delete($id)
    {
        $this->Level_model->level_delete($id, 'level');
        echo '<script language=JavaScript>alert("Delete Berhasil"); onclick = history.go(-1)</script>';
    }
}
