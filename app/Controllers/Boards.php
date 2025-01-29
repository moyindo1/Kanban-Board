<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BoardsModel;

class Boards extends BaseController
{
    protected $model;
    public function __construct(){
        $this->model = new BoardsModel();
    }
    public function getindex(){
        $data['boards'] = $this->model->getRecord();
        return $this->render('pages/boards/boards_view', $data);
    }

    public function getced_edit($id = 0, $todo = 0){
        $this->edit('pages/boards/boards_edit', $id, $todo);
    }

    public function postsubmit_edit(){
        $data = ['board' => $_POST['board']];
        return $this->handleFormSubmission('boards', $data, 'pages/boards/boards_edit', 'boards/');
    }
}