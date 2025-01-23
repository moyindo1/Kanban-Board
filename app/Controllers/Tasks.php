<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonenModel;
use App\Models\TasksModel;

class Tasks extends BaseController
{

    public function __construct(){
        $this->TasksModel = new TasksModel();
    }

    public function getindex(){



        $data['tasks'] = $this->TasksModel->getTasks();


        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/tasks/tasks_view',  $data);
        echo view('templates/footer');

    }

    public function getced_edit($id = 0, $todo = 0){

        $data['todo'] = $todo;
        if($id > 0 && ($todo == 1 || $todo == 2))
            $data['tasks'] = $this->TasksModel->getTasks($id);

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/tasks/tasks_edit', $data);
        echo view('templates/footer');
    }
    public function postsubmit_edit()
    {

        if ($this->validation->run($_POST, 'tasks')) {

            if (isset($_POST['btnSpeichern'])) {

                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $this->TasksModel->updateTask();
                } else {
                    $this->TasksModel->createTask();
                }
                return redirect()->to(base_url('tasks/'));
            } elseif (isset($_POST['btnLoeschen'])) {
                $this->TasksModel->deleteTask();
                return redirect()->to(base_url('tasks/'));
            } elseif (isset($_POST['btnAbbrechen'])) {
                return redirect()->to(base_url('tasks/'));
            }
        }else{
            $data['tasks'] = $_POST;
            $data['error'] = $this->validation->getErrors();
            var_dump($data);
            $data['todo'] = '1';

            echo view('templates/header');
            echo view('templates/navbar');
            echo view('pages/tasks/tasks_edit', $data);
            echo view('templates/footer');
        }
    }


}