<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bookcategory extends CI_Controller
{
    public function __construct()
    {
        // load model, helper dan library
        parent::__construct();
        $this->load->model('Bookcategory_model');
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $data['book_category'] = $this->Bookcategory_model->bookcategory_getAll();
        $this->load->view('admin/book_category/book_category', $data);
    }
    public function add()
    {
        $nama = strip_tags($this->input->post('i_nama'));
        // input array

        $data = [
            'name' => $nama

        ];

        // Insert ke database
        $x = $this->Bookcategory_model->book_category_cek($nama);
        if ($x == null) {
            $this->Bookcategory_model->book_category_insert('book_category', $data);
            echo '<script language=JavaScript>alert("Input Berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Name Book category telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function update($id)
    {
        $data['book_category'] = $this->Bookcategory_model->bookcategory_getById($id);
        $nama = strip_tags($this->input->post('i_nama'));


        // Input Array
        $data = [
            'name' => $nama

        ];
        // Insert ke database
        $x = $this->Bookcategory_model->book_category_cek($nama);

        if ($x == null) {
            $this->Bookcategory_model->book_category_update($id, 'book_category', $data);
            echo '<script language=JavaScript>alert("UPDATE berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Book Category telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function delete($id)
    {
        $this->Bookcategory_model->book_category_delete($id, 'book_category');
        echo '<script language=JavaScript>alert("Delete Berhasil"); onclick = history.go(-1)</script>';
    }
}
