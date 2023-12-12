<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add & View Cinema Dates</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->

<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Cinemas Dates</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Cinema Date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="date_sel" required>
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #ff5860 100%);" name="date_btn">Add Cinema Date</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>



              <?php



if(isset($_POST['date_btn'])){

  $date_type=$_POST['date_sel'];

// insert query
  $date_insert=mysqli_query($con,"insert into date values('null',' $date_type')");

}



?>

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Movie Dates</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data in same page -->
                        <?php 

                              $date_result=mysqli_query($con,"select * from date");
                                 foreach($date_result as $date_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $date_data[date_id]</th>
                                    <td> $date_data[date_name] </td>
                                     <td>
                                        <a href='date_del.php?dat=$date_data[date_id]'><i class='fa fa-trash btn'></i></a>
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