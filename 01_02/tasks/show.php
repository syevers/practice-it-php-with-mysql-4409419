<?php
// hostname: "127.0.0.1"
// username: "mariadb"
// password: "mariadb"
// database: "mariadb"
// port:     3306
$db = mysqli_connect('127.0.01', 'mariadb', 'mariadb', 'mariadb', 3306);
$query = 'SELECT * FROM tasks';
$result = mysqli_query($db, $query);
$task =  mysqli_fetch_assoc($result);
// echo print_r($task['id']);
// echo json_encode($task);
// foreach ($result as $row) {
//   echo print_r($row);
// }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Task Manager: Show Task</title>
  </head>
  <body>

    <header>
      <h1>Task Manager</h1>
    </header>

    <section>

      <h1>Show Task</h1>

      <dl>
        <dt>ID</dt>
        <dd><?php echo $task['id']; ?> </dd>
      </dl>
      <dl>
        <dt>Priority</dt>
        <dd><?php echo $task['priority']; ?></dd>
      </dl>
      <dl>
        <dt>Completed</dt>
        <dd><?php echo $task['completed'] == true; ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo $task['description'];?></dd>
      </dl>

    </section>

  </body>
</html>
