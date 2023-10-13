<?php
 if(session_status()===PHP_SESSION_NONE)session_start();
     
$con=mysqli_connect('localhost','root','','todo');
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['title'])){
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    //$title=str($title1);
    echo $title;
   
   
    $sql="INSERT INTO `tasks`(`title`) VALUES('$title')";
     mysqli_query($con,$sql);
  // echo  mysqli_affected_rows($con);لو الداتا دخلت الناتح=1
 
  //  echo mysqli_connect_error($con);
  
  if(mysqli_affected_rows($con)==1){
      $_SESSION['success'] ='data suc';
    }
    header('location:../design/index.php');
    die;
}
else echo 'hello';