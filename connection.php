<?php


$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = "b59b5a37513c8b";
$password = "2c6935ff";

// MAKE CONNECTION

try{

    $conn = new PDO("mysql:host=$servername; dbname=heroku_bcd74fb2c06bd97" , $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){

	echo "UNABLE TO CONNECT . PLEASE CREATE A DATABASE WITH THE NAME [ database ] ".$e->getMessage();
	exit;

}
////////////CONNECTION SUCCESS///////////////////////


try{
	$conn->query("CREATE TABLE IF NOT EXISTS ayodeji_hotel_reservation(customer_name VARCHAR(20), email VARCHAR(20) ,hotel_name VARCHAR(20) ,number_of_days VARCHAR(20), total_price VARCHAR(20)                    )");
}catch(Exception $e){
	echo $e->getMessage();
	exit;
}








?>