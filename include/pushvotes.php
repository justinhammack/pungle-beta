<?php

  //db connection detils
  $host = "localhost";
  $user = "pungle";
  $password = "orion";
  $database = "pungle";
	
  //make connection
  $server = mysql_connect($host, $user, $password);
  $connection = mysql_select_db($database, $server);
	
  //get POST data
  $name = mysql_real_escape_string($_POST["author"]);
  $comment = mysql_real_escape_string($_POST["comment"]);

  //add new comment to database
  mysql_query("INSERT INTO cause_voting VALUES(' $name ',' $comment ')");

?>