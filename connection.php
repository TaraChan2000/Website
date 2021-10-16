<?php
   $conn = pg_connect('localhost', 'root', '', 'online_shopping')
           or die("Can not connect database".pg_connect_error());
?>
