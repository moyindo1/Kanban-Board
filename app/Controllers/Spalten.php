<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpaltenModel;
class Spalten extends BaseController
{
    protected $model;
    public function __construct(){
        $this->model = new SpaltenModel();

    }

    public function getindex(){

        $data['items'] = $this->model->getRecord();
        $this->render('pages/spalten/spalten_view', $data);
    }

    public function getced_edit($id = 0, $todo = 0){
        $this->edit('pages/spalten/spalten_edit', $id, $todo);
    }


    public function postsubmit_edit()
    {
        $data = [
            'spalte' => $_POST['spalte'],
            'spaltenbeschreibung' => $_POST['spaltenbeschreibung'],
            'sortid' => $_POST['sortid'],
            'boardsid' => $_POST['boardsid']
        ];

        return $this->handleFormSubmission('spalten', $data, 'pages/spalten/spalten_edit', 'spalten/');
    }


}