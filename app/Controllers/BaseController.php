<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $session;
    protected $validation;
    protected $model;

    protected $helpers = [];


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
        // E.g.: $this->session = \Config\Services::session();
    }

    public function render($view, $data = []){
        echo view('templates/header');
        echo view('templates/navbar');
        echo view($view, $data);
        echo view('templates/footer');
    }

     protected function edit($view, $id = 0, $todo = 0){

            $data['todo'] = $todo;

             if($id > 0 && ($todo == 1 || $todo == 2))
                 $data['items'] = $this->model->getRecord($id);

             $this->render($view, $data);

     }

     protected function handleFormSubmission($rules, $data, $errorView, $redirectURL){
        if($this->validateAndProcess($rules, $errorView, $data)){


            if(isset($_POST['btnSpeichern'])){

                if(!empty($_POST['id'])){
                    $this->model->updateRecord($_POST['id'], $data);
                }else{
                    $this->model->createRecord($data);
                }
                return redirect()->to(base_url($redirectURL));
            }
            elseif (isset($_POST['btnLoeschen'])) {
                $this->model->deleteRecord($_POST['id']);
                return $this->redirectTo($redirectURL);
            }
            elseif (isset($_POST['btnAbbrechen'])) {
                return $this->redirectTo($redirectURL);
            }
            else {
                return $this->redirectTo($redirectURL);
            }
        }
     }

     protected function redirectTo($path){
        return redirect()->to(base_url($path));
     }

    protected function validateAndProcess($rules, $view, $data){

        if($this->validation->run($_POST, $rules)){
            return true;
        }
        else{
            $data['items'] = $_POST;
            $data['errors'] = $this->validation->getErrors();
            $this->render($view, $data);
            return false;
        }
    }



}
