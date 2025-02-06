<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BoardsModel;
use App\Models\PersonenModel;
use App\Models\SpaltenModel;
use App\Models\TaskartenModel;
use App\Models\TasksModel;

class Tasks extends BaseController
{

    protected $model;
    protected $boards;
    protected $spalten;
    protected $personen;
    protected $taskarten;
    public function __construct(){

        $this->model = new TasksModel();
        $this->boards = new BoardsModel();
        $this->spalten = new SpaltenModel();
        $this->personen = new PersonenModel();
        $this->taskarten = new TaskartenModel();
    }

    public function getindex($selectedBoard = NULL){
        if($selectedBoard != NULL){
            $data['selectedBoard'] = $this->boards->getRecord($selectedBoard);
        }

        $data['items'] = $this->model->getRecord();
        $data['boards'] = $this->boards->getRecord();
        $data['spalten'] = $this->spalten->getRecord();
        $data['personen'] = $this->personen->getPersonen();
        $data['taskarten'] = $this->taskarten->getRecord();

        $this->render('pages/tasks/tasks_view', $data);
    }

    public function getced_edit($id, $todo, $spaltenid){
        $data['spaltenid'] = $spaltenid;
        $data['personen'] = $this->personen->getPersonen();
        $data['taskarten'] = $this->taskarten->getRecord();
        var_dump($data['taskarten']);
        $this->edit('pages/tasks/tasks_edit', $id, $todo, $data);
    }

    public function postsubmit_edit(){
        $data['taskarten'] = $this->taskarten->getRecord();
        $data = [
            'personenid' => $_POST['personenid'],
            'taskartenid' => $_POST['taskartenid'],
            'sortid' => $_POST['sortid'],
            'spaltenid' => $_POST['spaltenid'],
            'tasks' => $_POST['tasks'],
            'notizen' => $_POST['notizen'],
            'erinnerungsdatum' => $_POST['erinnerungsdatum']
        ];
        log_message('debug', print_r($data, true));
        return $this->handleFormSubmission('tasks', $data, 'pages/tasks/tasks_edit', 'tasks/');
    }



}