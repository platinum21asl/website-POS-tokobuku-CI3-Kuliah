<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        // load model, helper dan library
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $data['customer'] = $this->Customer_model->customer_getAll();
        $this->load->view('admin/customer/customer', $data);
    }

    public function add()
    {
        $nama = strip_tags($this->input->post('i_nama'));
        $email = strip_tags($this->input->post('i_email'));
        $no_member = strip_tags($this->input->post('i_no_member'));
        $gender = strip_tags($this->input->post('i_gender'));
        $phone = strip_tags($this->input->post('i_phone'));
        $address = strip_tags($this->input->post('i_address'));
        // input array

        $data = [
            'name' => $nama,
            'email' => $email,
            'no_member' => $no_member,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address

        ];

        // Insert ke database
        $x = $this->Customer_model->customer_cek($email);
        if ($x == null) {
            $this->Customer_model->customer_insert('customer', $data);
            echo '<script language=JavaScript>alert("Input Berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Customer telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function update($id)
    {
        $data['customer'] = $this->Customer_model->customer_getById($id);
        $nama = strip_tags($this->input->post('i_nama'));
        $email = strip_tags($this->input->post('i_email'));
        $no_member = strip_tags($this->input->post('i_no_member'));
        $gender = strip_tags($this->input->post('i_gender'));
        $phone = strip_tags($this->input->post('i_phone'));
        $address = strip_tags($this->input->post('i_address'));


        // Input Array
        $data = [
            'name' => $nama,
            'email' => $email,
            'no_member' => $no_member,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address

        ];
        // Insert ke database
        $x = $this->Customer_model->customer_cek($email);

        if ($x == null) {
            $this->Customer_model->customer_update($id, 'customer', $data);
            echo '<script language=JavaScript>alert("UPDATE berhasil"); onclick = location.href = document.referrer</script>';
        } else {
            echo '<script language=JavaScript>alert("GAGAL!!! Email Customer telah disimpan sebelumnya"); onclick = history.go(-1)</script>';
        }
    }

    public function delete($id)
    {
        $this->Customer_model->customer_delete($id, 'customer');
        echo '<script language=JavaScript>alert("Delete Berhasil"); onclick = history.go(-1)</script>';
    }
}
