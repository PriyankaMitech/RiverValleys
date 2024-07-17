<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public function getalldata($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getResult();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function get_single_data($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getRow();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    
}