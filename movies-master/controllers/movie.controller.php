<?php

require_once "./models/movie.model.php";
require_once "./views/movie.view.php";

class movieController{
    private $view;
    private $model;

    function __construct(){
        $this->view=new movieView();
        $this->model=new movieModel();
    }

    function showHome(){
        $movies=$this->view->showHome();
    }

    function seeMovies($params){
        var_dump($params[1]);
        if(isset($params[1])&&!empty($params[1])){
            $movies=$this->model->getMovies($params[1]);
            $this->view->showMovies($movies);
        }
        else{
            $this->view->showError();
        }
    }
}