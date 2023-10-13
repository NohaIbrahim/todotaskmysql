<?php
if(session_status()===PHP_SESSION_NONE)session_start();
$con=mysqli_connect('localhost','root','','todo');
// $x=null;
// if($x==null){(!$x=$x==null)
//     echo 'hello';
// }
   if(isset($_GET['id'])){
    $id=$_GET['id'];
    $mysql="SELECT *  FROM `tasks` WHERE `id`='$id'";
    $res=mysqli_query($con,$mysql);
    if(!mysqli_fetch_assoc($res)){//فى حاله مش موجودid   mysqlifetch=null
    $_SESSION['error']='data error';
    header('location:../design/index.php');
  
        die;
    }
      
   else{$mysql="DELETE FROM `tasks` WHERE `id`='$id'";
$res=mysqli_query($con,$mysql);
if(mysqli_affected_rows($con)){
    $_SESSION['success']='deleting succfull';
}}

  header('location:../design/index.php');
   }