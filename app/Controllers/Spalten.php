<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpaltenModel;
class Spalten extends BaseController
{
    public function __construct(){
        $this->SpaltenModel = new SpaltenModel();
    }

    public function getindex(){

        $data['spalten'] = $this->SpaltenModel->getSpalten();

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/spalten/spalten_view', $data);
        echo view('templates/footer');
    }

    public function getced_edit($id = 0, $todo = 0){

        $data['todo'] = $todo;
        if($id > 0 && ($todo == 1 || $todo == 2))
            $data['spalten'] = $this->SpaltenModel->getSpalten($id);

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/spalten/spalten_edit', $data);
        echo view('templates/footer');
    }




    public function postsubmit_edit(){

        if ($this->validation->run($_POST, 'spalten')) {


            if (isset($_POST['btnSpeichern'])) {
                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $this->SpaltenModel->updateSpalte();
                } else {
                    $this->SpaltenModel->createSpalte();
                }
                return redirect()->to(base_url('spalten/'));
            } elseif (isset($_POST['btnLoeschen'])) {
                $this->SpaltenModel->deleteSpalte();
                return redirect()->to(base_url('spalten/'));
            } elseif (isset($_POST['btnAbbrechen'])) {
                return redirect()->to(base_url('spalten/'));
            }


        } else {
            $data['spalten'] = $_POST;
            $data['error'] = $this->validation->getErrors();
            $data['todo'] = '1';
            var_dump($_POST);
            echo view('templates/header');
            echo view('templates/navbar');
            echo view('pages/spalten/spalten_edit', $data);
            echo view('templates/footer');
        }
    }



}