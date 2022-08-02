<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level_model extends CI_Model
{

    public function level_getAll()
    {
        $query = $this->db->query("SELECT * FROM level ");
        return $query;
    }

    public function level_getById($id)
    {
        $query = $this->db->query("SELECT * FROM level where level_id = $id");
        return $query;
    }
    public function level_insert($table, $data)
    {
        // public function author_insert adalah model function “Create” untuk menginput data baru ke dalam tabel

        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function level_update($id, $table, $data)
    {
        // public function author_update adalah model function “Update” untuk mengubah data tertentu yang ada di dalam tabel.
        $query = $this->db->where('level_id', $id);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function level_delete($id, $table)
    {
        // public function author_delete adalah model function “Delete” untuk menghapus data tertentu yang ada di dalam tabel.

        $query = $this->db->where('level_id', $id);
        $query = $this->db->delete($table);
        return $query;
    }
    public function level_cek($nama)
    {
        // public function author_cek adalah model function “Cek” untuk melakukan validasi data saat insert dan edit dilakukan yang bertujuan untuk memastikan tidak ada data yang sama dalam tabel author. Nama antar author berpotensi sama, namun email dapat dibedakan.

        $query = $this->db->query("SELECT * FROM `level` WHERE name = '$nama'");
        return $query->result_array();
    }
}
