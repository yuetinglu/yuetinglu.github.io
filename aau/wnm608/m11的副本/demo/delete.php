<?php

include "db_connect.php";

$query_string = "
			DELETE FROM products
			WHERE title = 'Golden gate'
		";
$result = $conn->query($query_string);