<?php

class Cadastrar extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->js = array('cadastrar/js/index.js');
    }

    function index()
    {
        $this->view->title = 'Cadastrar usuário';
        $this->view->render('header');
        $this->view->render('cadastrar/index');
        $this->view->render('footer');
    }

    function cadNewUser()
    {
        $this->model->cadNewUser();
    }
}
