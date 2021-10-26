<?php
    $conn = pg_connect("postgres://lzivmrsggoxgas:16f7b2290158164ed2d74cebddabd8d2d58aa95d4927c789c8702686af4f6b89@ec2-34-225-66-116.compute-1.amazonaws.com:5432/d7tsjdo4ng7o21");
    //$conn = pg_connect("postgresql://postgres:322001@localhost:5432/postgres");
    if(!$conn){
        die("Can not connect database");
    } 
?>