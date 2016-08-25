<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$city = $_GET['city'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$gplus = $_GET['gplus'];
$facebook = $_GET['facebook'];
$vkontakte = $_GET['vk'];
$instagram = $_GET['instagram'];
$odnoklassniki = $_GET['ok'];

$query = pg_query($connection, "UPDATE profiles SET 
first_name='$firstname',
last_name='$lastname',
city ='$city',
address='$address',
phone_number='$phone',
gplus='$gplus',
facebook='$facebook',
vkontakte='$vkontakte',
instagram='$instagram',
odnoklassniki='$odnoklassniki'
WHERE id='$id'");
