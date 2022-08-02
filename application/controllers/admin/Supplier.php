<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        // load model, helper dan library
        parent::__construct();
        $this->load->model('Supplier_model');
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $data['supplier'] = $this->Supplier_model->supplier_getAll();
        $this->load->view('admin/supplier/supplier', $data);
    }

    public function add()
    {
        $nama = strip_tags($this->input->post('i_nama'));
        $email = strip_tags($this->input->post('i_email'));
        $phone = strip_tags($this->input->post('i_phone'));
        $address = strip_tags($this->input->post('i_address'));
        // input array

        $data = [
            'name' => $nama,
            'email' => $email,
            'phone' => $phone,
            'address' => $address

        ];

        // Insert ke database
        $x = $this->Supplier_model->supplier_cek($email);
        if ($x == null) {
            $this->Supplier_model->Supplier_insert('supplier', $data);
            echo '<script language=JavaScript>alert("Input Berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Supplier telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function update($id)
    {
        $data['supplier'] = $this->Supplier_model->supplier_getById($id);
        $nama = strip_tags($this->input->post('i_nama'));
        $email = strip_tags($this->input->post('i_email'));
        $phone = strip_tags($this->input->post('i_phone'));
        $address = strip_tags($this->input->post('i_address'));


        // Input Array
        $data = [
            'name' => $nama,
            'email' => $email,
            'phone' => $phone,
            'address' => $address

        ];
        // Insert ke database
        $x = $this->Supplier_model->supplier_cek($email);

        if ($x == null) {
            $this->Supplier_model->supplier_update($id, 'supplier', $data);
            echo '<script language=JavaScript>alert("UPDATE berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Email Supplier telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function delete($id)
    {
        $this->Supplier_model->supplier_delete($id, 'supplier');
        echo '<script language=JavaScript>alert("Delete Berhasil"); onclick = history.go(-1)</script>';
    }
}
