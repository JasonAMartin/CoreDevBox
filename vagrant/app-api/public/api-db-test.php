<?php
// This won't work until you've changed your DB info below.
$connection = new PDO('mysql:host=localhost;dbname=somedb', 'someuser', 'somepass');
$statement  = $connection->query('SELECT message FROM sometable');

echo $statement->fetchColumn();
