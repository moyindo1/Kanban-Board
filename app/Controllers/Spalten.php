<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Spalten extends BaseController
{
    public function getindex(){


        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/spalten_view');
        echo view('templates/footer');
    }


}