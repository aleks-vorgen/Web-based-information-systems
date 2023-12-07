<html lang="en">

<head><title>Title</title></head>

<body>
  <form action="" method="get">
    <label for="author">Author:</label>
    <input type="text" name="author" id="author">

    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <input type="submit" name="search" value="Search">
  </form>

  <table>
    <thead>
      <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Publication Year</td>
        <td>Page Count</td>
        <td>Cover Photo</td>
        <td>Author</td>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($books as $book) {
        echo '<tr>';
        echo '<td>' . $book['title'] . '</td>';
        echo '<td>' . $book['description'] . '</td>';
        echo '<td>' . $book['publication_year'] . '</td>';
        echo '<td>' . $book['page_count'] . '</td>';
        echo '<td><img src="images/' . $book['cover_photo'] . '" alt="Cover Photo" style="width: 50px;"></td>';
        echo '<td>' . $book['first_name'] . ' ' . $book['last_name'] . '</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</body>

</html>