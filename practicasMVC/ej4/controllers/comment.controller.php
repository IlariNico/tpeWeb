<?php 

require_once "./models/comment.model.php";
require_once "./views/comment.view.php";
class commentController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new commentModel();
        $this->view=new commentView();
    }

    function deleteComment($id){
        $comment=$this->model->deleteComment($id);
        header("Location: " . BASE_URL);

    }
    function showHome(){
        $comments=$this->model->getComments();
        $this->view->showComments($comments);
    }
}