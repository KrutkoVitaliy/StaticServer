<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$service = $_GET['service'];
$cost = $_GET['cost'];
$current = pg_query($connection, "SELECT makeup_services, makeup_costs FROM profiles WHERE id='$id'");
$row = pg_fetch_row($current);
$endService = $row[0].",".$service;
$endCost = $row[1].",".$cost;
$get = pg_query($connection, "UPDATE profiles SET makeup_services='$endService', makeup_costs='$endCost' WHERE id='$id'");
