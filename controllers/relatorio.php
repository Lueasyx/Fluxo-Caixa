<?php

class Relatorio extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->js = array('relatorio/js/index.js');
    }

    function index()
    {
        $this->view->title = 'HOME';
        $this->view->render('header');
        $this->view->render('relatorio/index');
        $this->view->render('footer');
    }

    function login()
    {
        $this->model->login();
    }
    function logout()
    {
        $this->model->logout();
    }
    function getRelatorio()
    {
        $this->model->getRelatorio();
    }
}
