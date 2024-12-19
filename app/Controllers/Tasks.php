<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tasks extends BaseController
{


    public function getindex(){
        $teamnumber=8;

        echo view('templates/header');
        echo view('templates/navbar');
        echo var_dump($teamnumber);
        echo view('templates/footer');
    }

}