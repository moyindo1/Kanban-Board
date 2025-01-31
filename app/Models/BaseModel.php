<?php

namespace App\Models;

use CodeIgniter\Model;

abstract class BaseModel extends Model
{

    protected $tableName;
    public function __construct(){
        parent::__construct();

        $this->table = $this->db->table($this->tableName);
    }

    public function getRecord($id = NULL){

        if($id != NULL)
            return $this->table->where('id', $id)->get()->getRowArray();

        return $this->table->select('*')->get()->getResultArray();
    }

    public function createRecord($data){
        return $this->table->insert($data);
    }

    public function updateRecord($id, $data){
        return $this->table->where('id', $id)->update($data);
    }

    public function deleteRecord($id){
        return $this->table->where('id', $id)->delete();
    }
}