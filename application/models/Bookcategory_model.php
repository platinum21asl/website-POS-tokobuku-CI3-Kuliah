<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bookcategory_model extends CI_Model
{

    public function bookcategory_getAll()
    {
        $query = $this->db->query("SELECT * FROM book_category");
        return $query;
    }

    public function bookcategory_getById($id)
    {
        $query = $this->db->query("SELECT * FROM book_category where book_category_id = $id");
        return $query;
    }

    public function book_category_insert($table, $data)
    {
        // public function author_insert adalah model function “Create” untuk menginput data baru ke dalam tabel

        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function book_category_update($id, $table, $data)
    {
        // public function author_update adalah model function “Update” untuk mengubah data tertentu yang ada di dalam tabel.
        $query = $this->db->where('book_category_id', $id);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function book_category_delete($id, $table)
    {
        // public function author_delete adalah model function “Delete” untuk menghapus data tertentu yang ada di dalam tabel.

        $query = $this->db->where('book_category_id', $id);
        $query = $this->db->delete($table);
        return $query;
    }
    public function book_category_cek($nama)
    {
        // public function author_cek adalah model function “Cek” untuk melakukan validasi data saat insert dan edit dilakukan yang bertujuan untuk memastikan tidak ada data yang sama dalam tabel author. Nama antar author berpotensi sama, namun email dapat dibedakan.

        $query = $this->db->query("SELECT * FROM `book_category` WHERE name = '$nama'");
        return $query->result_array();
    }
}
