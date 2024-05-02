<?php

$hostname = "127.0.0.1";
$username = "mariadb";
$password = "mariadb";
$database = "mariadb";
$port =     3306;

//  Test if connection succeeded
$db = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_errno($db)) {
  $msg = 'failed to connect to database';
  $msg .= mysqli_connect_error();
  $msg .= " ( " . mysqli_connect_errno() . " ) ";
  exit($msg);
}

$sql_query = 'SELECT * FROM tasks';
$result = mysqli_query($db, $sql_query);
$id = mysqli_fetch_assoc($result);
echo ($id['id']);
foreach() {

}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Task Manager: Task List</title>
</head>

<body>

  <header>
    <button>irsenteisnt</button>
    <h1>Task Manager</h1>
  </header>

  <section>

    <h1>Task List</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Priority</th>
        <th>Completed</th>
        <th>Description</th>
      </tr>

      <?php // loop through tasks 
      ?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php // end loop 
      ?>
    </table>

  </section>

</body>

</html>