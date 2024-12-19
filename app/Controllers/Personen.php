<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonenModel;


class Personen extends BaseController
{
    public function getindex()
    {



        $personModel = new PersonenModel();
        $data = $personModel->getData();


        echo view('templates/header');
        echo view('templates/navbar');
        //var_dump($data);
        echo view('pages/tasks_view', ['data' => $data]);
        echo view('templates/footer');


    }

}