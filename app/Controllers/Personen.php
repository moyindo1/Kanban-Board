<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonenModel;


class Personen extends BaseController
{

    public function __construct(){
        $this->PersonenModel = new PersonenModel();
    }

    public function getindex()
    {

        $data['personen'] = $this->PersonenModel->getPersonen();

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/personen/personen_view', $data);
        echo view('templates/footer');


    }

    public function getced_edit($id = 0, $todo = 0){

        $data['todo'] = $todo;

        if($id > 0 && ($todo == 1 || $todo == 2) )
            $data['personen'] = $this->PersonenModel->getPersonen($id);

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/personen/personen_edit', $data);
        echo view('templates/footer');


    }

    public function postsubmit_edit()
    {

        echo "Anfrage-Methode: " . $this->request->getMethod() . "<br>";
        echo "Action-URL: " . base_url('personen/submit_edit') . "<br>";
        echo "<pre>";
        print_r($this->request->getPost());
        echo "</pre>";

        if ($this->request->getMethod() === 'post' && $this->request->getPost('btnSpeichern')) {
            echo "Speichern-Button wurde gedrückt.";
        } else {
            echo "POST-Daten fehlen oder falsche Anfrage.";
        }
        if (isset($_POST['btnSpeichern'])) {


            if (isset($_POST['id']) && $_POST['id'] != '') {
                $this->PersonenModel->updatePerson();
            } else {
                $this->PersonenModel->createPerson();
            }
            return redirect()->to(base_url('personen/'));
        } elseif (isset($_POST['btnLoeschen'])) {
            $this->PersonenModel->deletePerson();
            return redirect()->to(base_url('personen/'));
        } elseif (isset($_POST['btnAbbrechen'])) {
            return redirect()->to(base_url('personen/'));
        }
    }
/**
    public function postsubmit_edit()
    {
        echo "Anfrage-Methode: " . $this->request->getMethod() . "<br>";
        echo "Action-URL: " . base_url('personen/submit_edit') . "<br>";
        echo "<pre>";
        print_r($this->request->getPost());
        echo "</pre>";

        if ($this->request->getMethod() === 'post') {
            if ($this->request->getPost('btnSpeichern')) {
                if ($this->request->getPost('id') && !empty($this->request->getPost('name'))) {
                    if ($this->PersonenModel->updatePerson()) {
                        echo "Person wurde erfolgreich aktualisiert.";
                    } else {
                        echo "Fehler beim Aktualisieren der Person.";
                    }
                } else {
                    echo "Bitte alle erforderlichen Felder ausfüllen.";
                }
            } elseif ($this->request->getPost('btnLoeschen')) {
                if ($this->PersonenModel->deletePerson()) {
                    return redirect()->to(base_url('personen/index'));
                } else {
                    echo "Fehler beim Löschen der Person.";
                }
            } elseif ($this->request->getPost('btnAbbrechen')) {
                return redirect()->to(base_url('personen/index'));
            }
        } else {
            echo "POST-Daten fehlen oder falsche Anfrage.";
        }
    }

**/
}