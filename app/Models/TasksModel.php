<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{



    public function getTasks($id = NULL){

        $this->tasks = $this->db->table('Tasks');
        $this->tasks->select('*');

        if($id != NULL)
            $this->tasks->where('id', $id);

        $this->tasks->orderBy('sortid', 'ASC');
        $result = $this->tasks->get();

        if($id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();

    }

    public function createTask(){
        $this->tasks = $this->db->table('Tasks');
        $this->tasks->insert(array('personenid' => $_POST['personenid'],
                                    'taskartenid' => $_POST['taskartenid'],
                                    'sortid' => $_POST['sortid'],
                                    'spaltenid' => $_POST['spaltenid'],
                                    'tasks' => $_POST['tasks'],
                                    'notizen' => $_POST['notizen'],
                                    'erinnerungsdatum' => $_POST['erinnerungsdatum']));
    }
    public function updateTask(){
        $this->tasks = $this->db->table('Tasks');
        $this->tasks->where('id', $_POST['id']);
        $this->tasks->update(array('personenid' => $_POST['personenid'],
                                    'taskartenid' => $_POST['taskartenid'],
                                    'sortid' => $_POST['sortid'],
                                    'spaltenid' => $_POST['spaltenid'],
                                    'tasks' => $_POST['tasks'],
                                    'notizen' => $_POST['notizen'],
                                    'erinnerungsdatum' => $_POST['erinnerungsdatum']));
    }
    public function deleteTask(){

        echo 'delete<br>';
        //print_r($_POST); // Zeigt die übermittelten POST-Daten an

        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $this->tasks = $this->db->table('Tasks');
            $this->tasks->where('id', $_POST['id']);
            if ($this->tasks->delete()) {
                echo 'Task successfully deleted.';
            } else {
                echo 'Failed to delete the task.';
            }
        } else {
            echo 'No ID provided.';
        }

    }
}