<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$service = $_GET['service'];
$cost = $_GET['cost'];
$current = pg_query($connection, "SELECT manicure_services, manicure_costs FROM profiles WHERE id='$id'");
$row = pg_fetch_row($current);
$endService = $row[0].",".$service;
$endCost = $row[1].",".$cost;
$get = pg_query($connection, "UPDATE profiles SET manicure_services='$endService', manicure_costs='$endCost' WHERE id='$id'");