<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Boards extends BaseController
{
    public function getindex(){


        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/boards_view');
        echo view('templates/footer');
    }
}