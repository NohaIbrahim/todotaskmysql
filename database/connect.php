<?php
///second way to connect database
// $username='root';
// $password='';
// $db=new PDO("mysql:host=localhost;dbname=clinic system;charset=utf8;",
// $username,$password);
// if($db){
//     echo 'goood connect';
// }
//////////////////////////////////
//////////to create database and connect
$host='localhost';
$username='root';
 $password='';
 $con=mysqli_connect($host,$username,$password);
 $sql="CREATE DATABASE hello1";
 mysqli_query($con,$sql);

///////////////if  already i have the database and i want connect only
// $conn=mysqli_connect('localhost','root','','todo');
// if($conn){
//     echo'good byee';
// }
