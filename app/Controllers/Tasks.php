<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BoardsModel;
use App\Models\SpaltenModel;
use App\Models\TasksModel;

class Tasks extends BaseController
{

    protected $model;
    protected $boards;
    protected $spalten;
    public function __construct(){

        $this->model = new TasksModel();
        $this->boards = new BoardsModel();
        $this->spalten = new SpaltenModel();
    }

    public function getindex($selectedBoard = NULL){
        if($selectedBoard != NULL){
            $data['selectedBoard'] = $this->boards->getRecord($selectedBoard);
        }

        $data['items'] = $this->model->getRecord();
        $data['boards'] = $this->boards->getRecord();
        $data['spalten'] = $this->spalten->getRecord();

        $this->render('pages/tasks/tasks_view', $data);
    }

    public function getced_edit($id, $todo){
        $this->edit('pages/tasks/tasks_edit', $id, $todo);
    }

    public function postsubmit_edit(){
        $data = [
            'personenid' => $_POST['personenid'],
            'taskartenid' => $_POST['taskartenid'],
            'sortid' => $_POST['sortid'],
            'spaltenid' => $_POST['spaltenid'],
            'tasks' => $_POST['tasks'],
            'notizen' => $_POST['notizen'],
            'erinnerungsdatum' => $_POST['erinnerungsdatum']
        ];

        return $this->handleFormSubmission('tasks', $data, 'pages/tasks/tasks_edit', 'tasks/');
    }



}