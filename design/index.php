<!DOCTYPE html>
<html lang="en">
    <?php if(session_status()===PHP_SESSION_NONE)session_start();
    $con=mysqli_connect('localhost','root','','todo');
    $mysql=" SELECT * FROM `tasks`";
    $res=mysqli_query($con,$mysql);
   $_SESSION['res']=$res;

    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>

  

    <div class="container">
    <div class="row">///////change with under script 
    <div class="col-8 mx-auto">
       
        
             <?php if(isset($_SESSION['success'])) {?>
                <div class="alert alert-success text-center">
                   <?php echo $_SESSION['success'];
                    ?>
                     </div>
            <?php  unset($_SESSION['success']);}?>
            <?php if(isset($_SESSION['error'])) {?>
                <div class="alert alert-danger text-center">
                   <?php echo $_SESSION['error'];
                    ?>
                     </div>
            <?php  unset($_SESSION['error']);}?>
           
            <form action="../core/store.php" method="POST" class="form border p-2 my-5">
        
                     <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead> <tbody>
                    <?php
                    while($row=mysqli_fetch_assoc($res)){;
                  // foreach($row as $key=>$val){
                       ?>
                   
                   
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['title']?></td>
                                <td>
                                    <a href="../core/delet.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="../core/edit.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                </td>
                            </tr>

                    </tbody>
               <?php }?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>