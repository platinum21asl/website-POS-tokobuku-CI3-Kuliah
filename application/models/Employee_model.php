<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model
{

    public function getdatalevel()
    {
        $query = $this->db->query("SELECT * FROM level ORDER BY name ASC");

        return $query->result();
    }
}
