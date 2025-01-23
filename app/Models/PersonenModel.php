<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model
{
    public function getPersonen($person_id = NULL){


        $this->personen = $this->db->table('Personen');
        $this->personen->select('*');

        IF ($person_id != NULL)
            $this->personen->where('id', $person_id);

        $this->personen->orderBy('Name');
        $result = $this->personen->get();

        if($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson(){
        $this->personen = $this->db->table('Personen');
        $this->personen->insert(array('vorname' => $_POST['vorname'],
                                        'name' => $_POST['name'],
                                        'email' => $_POST['email'],
                                        'password' => $_POST['password']));
    }

    public function updatePerson(){

        $this->personen = $this->db->table('Personen');
        $this->personen->where('id', $_POST['id']);
        $this->personen->update(array('vorname' => $_POST['vorname'],
                                        'name' => $_POST['name'],
                                        'email' => $_POST['email'],
                                        'password' => $_POST['password']));

    }

    public function deletePerson(){
        $this->personen = $this->db->table('Personen');
        $this->personen->where('id', $_POST['id']);
        $this->personen->delete();
    }
}