<?php
include_once("model/Book.php");

class Model {
  private PDO $db;

  public function __construct() {
    $this->db = new PDO('pgsql:host=localhost;dbname=postgres', 'postgres', '0000');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getBookList(): bool|array {
    $stmt = $this->db->query('SELECT books.title, books.description, books.publication_year, books.page_count, books.cover_photo, authors.last_name, authors.first_name 
                                  FROM books 
                                  JOIN authors ON books.author_id = authors.id');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function searchBooks($author, $title): bool|array {
      $query = 'SELECT books.title, books.description, books.publication_year, books.page_count, books.cover_photo, authors.last_name, authors.first_name 
                  FROM books 
                  JOIN authors ON books.author_id = authors.id 
                  WHERE CONCAT(authors.first_name, \' \', authors.last_name) LIKE :author
                  AND books.title LIKE :title';
  
      $stmt = $this->db->prepare($query);
      $stmt->execute(['author' => "%$author%", 'title' => "%$title%"]);
  
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
