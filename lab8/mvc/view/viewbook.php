<html lang="en">

<head><title>Title</title></head>

<body>
  <?php
  echo 'Title: ' . $book['title'] . '<br>';
  echo 'Author: ' . $book['first_name'] . ' ' . $book['last_name'] . '<br>';
  echo 'Description: ' . $book['description'] . '<br>';
  echo 'Publication Year: ' . $book['publication_year'] . '<br>';
  echo 'Page Count: ' . $book['page_count'] . '<br>';
  echo '<img src="images/' . $book['cover_photo'] . '" alt="Cover Photo" style="width: 150px;"><br>';
  ?>
</body>

</html>