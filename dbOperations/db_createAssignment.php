<pre>

<?php
  include_once(dirname(__FILE__).'/db_createAssign_functions.php');

  $module_name = $_POST['module_name'];
  $assign_name = $_POST['assign_name'];
  $deadline = $_POST['deadline'];
  $questions = $_POST['questions'];

  $connection = createConnection('localhost', 'root', '', 'assignments');

  $table_name = createTable($connection, $module_name, $assign_name, $deadline);

  foreach ($questions as $select) {
    addQuestion($connection, $table_name, $select[0], $select[1], $select[2], $select[3], $select[4], $select[5] );
  }

  closeConnection($connection);

?>

</pre>
