<?php

namespace App\Models;


use CodeIgniter\Model;

class SpaltenModel extends Model
{
    public function getSpalten($id = NULL){
        $this->spalten = $this->db->table('Spalten');
        $this->spalten->select('*');

        if($id != NULL)
            $this->spalten->where('id', $id);

        $result = $this->spalten->get();

        if($id != NULL)
            return $result->getRowArray();
        else {
            return $result->getResultArray();
        }
    }

    public function createSpalte(){
        $this->spalten = $this->db->table('Spalten');
        $this->spalten->insert(array('spalte' => $_POST['spalte'],
                                    'spaltenbeschreibung' => $_POST['spaltenbeschreibung'],
                                    'sortid' => $_POST['sortid'],
                                    'boardsid' => $_POST['boardsid']));
    }

    public function updateSpalte(){
        $this->spalten = $this->db->table('Spalten');
        $this->spalten->where('id', $_POST['id']);
        $this->spalten->update(array('spalte' => $_POST['spalte'],
                                    'spaltenbeschreibung' => $_POST['spaltenbeschreibung'],
                                    'sortid' => $_POST['sortid'],
                                    'boardsid' => $_POST['boardsid']));
    }

    public function deleteSpalte(){
        $this->spalten = $this->db->table('Spalten');
        $this->spalten->where('id', $_POST['id']);
        $this->spalten->delete();
    }
}