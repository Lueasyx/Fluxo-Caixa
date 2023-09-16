<?php

class Lancamento extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->js = array('lancamento/js/index.js');
    }

    function index()
    {
        $this->view->title = 'Lançamento';
        $this->view->render('header');
        $this->view->render('lancamento/index');
        $this->view->render('footer');
    }
    function Lancamento()
    {
        $this->model->Lancamento();
    }
}
