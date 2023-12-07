<?php
class Book
{
  public $title;
  public $author;
  public $description;
  public $cover_photo;

  public function __construct($title, $author, $description, $cover_photo)
  {
    $this->title = $title;
    $this->author = $author;
    $this->description = $description;
    $this->cover_photo = $cover_photo;
  }
}
