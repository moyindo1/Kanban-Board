<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {


        echo view('templates/header');
        echo view('templates/navbar');
        echo view('Startseite');
        echo view('templates/footer');
    }

    public function tasks()
    {

        echo view('templates/header');
        echo view('templates/navbar');
        echo view('Tasks');
        echo view('templates/footer');

    }

    public function spalten()
    {
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('Spalten');
        echo view('templates/footer');
    }

    public function spaltenErstellen()
    {
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('spalten-erstellen');
        echo view('templates/footer');
    }

    public function boards()
    {
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('Boards');
        echo view('templates/footer');
    }
}
