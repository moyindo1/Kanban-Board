<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model
{
    public function getData(){


        $this->data = $this->db->table('Personen');
        $this->data->select('*');
        return $this->data->get()->getResultArray();
    }
}