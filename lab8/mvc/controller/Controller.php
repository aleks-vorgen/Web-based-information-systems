<?php
include_once("model/Model.php");

class Controller
{
  public $model;

  public function __construct()
  {
    $this->model = new Model();
  }

  public function invoke()
  {
    $books = $this->model->getBookList();

    if (isset($_GET['search'])) {
      $author = $_GET['author'];
      $title = $_GET['title'];
      $books = $this->model->searchBooks($author, $title);
    }

    include 'view/booklist.php';
  }
}
