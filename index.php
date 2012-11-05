<html>
<body>
<h1>Messages</h1>
<p>Example PHP application that reads and writes to a MySQL database.</p>
<h2>All Messages in Database</h2><table>
<?php
include 'db-connect.php';

$query = "SELECT * FROM " . DB_TABLE;

if ($mresult = $mysqli->query($query)) {
  printf("<table>");
  while ($mrow = $mresult->fetch_row()) {
    printf("<tr>");
    foreach ($mrow as $val) {
      printf("<td>%s</td>", $val);
    }
    printf("</tr>");
  }
  printf("</table>");
}
else {
  printf("<p>No messages yet. How about adding one?</p>");
}

?>

<p><b>Add a message to the database</b></p>
<form action="add.php" method="post">
Message: <input type="text" name="message"><br>
Name: <input type="text" name="name"><br>
<input type="Submit">
</form>

</body>
</html>