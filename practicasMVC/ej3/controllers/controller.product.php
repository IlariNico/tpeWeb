<?php

require_once "./models/product.model.php";
require_once "./views/product.view.php";

class productController{

    private $model;
    private $view;


    public function __construct(){
        $this->model=new productModel();
        $this->view=new productView();
    }

    public function showProducts(){
        $products=$this->model->getProducts();
        $this->view->showProducts($products);
    }

    public function showProduct($id){
        $product=$this->model->getProduct($id);
        $this->view->showProduct($product);
    }

    public function showHome(){
        $this->view->showHome();
    }
}