<div class="col-8 mx-auto  my-5 ">
              <h2 class=" border p-2 my-2 text-center"> Register </h2>
                
              <?php   if(isset($_SESSION["errors"])){?>
                    <div class="alert alert-danger">
                    <?php
                        foreach($_SESSION['errors'] as $error)
                        echo $error; 
                           unset($_SESSION['errors']);  ?>
                           </div>
                <?php         
              }
              ?>
                          