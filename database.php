<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="anchor_note";
mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


// if(!$conn){
//   die("error");
// }
// if(!mysqli_select_db($conn,$dbname)){
//   die("Cannot Select DB");
// }

// $result=mysqli_query($conn,"SELECT * FROM user");
// if(!$result){
//   die("empty data");
// }else{
//   echo "<pre>";
//   var_dump($result);
// }


// $hostname = "localhost";
// $port = 3306;
// $dbname = "anchor_note";
// $username = "root";
// $password = "";

// $pdo = new PDO(
//     "mysql:host=$hostname;port=$port;dbname=$dbname",
//     $username,
//     $password
// );

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $sql = $pdo->prepare("

// SELECT * FROM  user; 

// ");

// $sql->execute();
// $bloodLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($bloodLists);
