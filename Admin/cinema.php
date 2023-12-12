<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add & View Cinema</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->



 <!-- Inline Form-->
              <div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Cinemas</strong></div>
                  <div class="block-body">


                    <form class="form-horizontal" method="post" action="">


                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Cinema Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="cinema_n">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Cinema Location</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="cinema_loc">
                        </div>
                      </div>


                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="cinema_btn" >Add Cinema</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
 <!-- Inline Form-->




<?php



if(isset($_POST['cinema_btn'])){

  $cin_name=$_POST['cinema_n'];
  $cin_loc=$_POST['cinema_loc'];

// insert query
  $cin_insert=mysqli_query($con,"INSERT INTO cinema VALUES ('null','$cin_name','$cin_loc')");


}



?>

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Cinema Name</th>
                          <th>Cinema Location</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data in same page -->
                        <?php 

                              $cinema_result=mysqli_query($con,"select * from cinema");
                                 foreach($cinema_result as $cinema_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $cinema_data[cin_id] </th>
                                    <td> $cinema_data[cinema_name] </td>
                                    <td>$cinema_data[cinema_location] </td>
                                     <td>
                                        <a href='cin_del.php?Cin=$cinema_data[cin_id]'><i class='fa fa-trash btn'></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href='cin_edit.php?Cin=$cinema_data[cin_id]'><i class='fa fa-pencil btn'></i></a>
                                     </td>
                                </tr>
                            </tbody>
                                 ";
                        

                            }

                      ?>
    











                        
                      
                    </table>
                  </div>
                </div>
              </div>






<?php

include('admin_footer.php');

?>