<?php
include('admin_header.php');
?>



<?php
$price_edit_id=$_GET['pr_edit'];
$edit_price_select=mysqli_query($con,"select * from movie_price where price_id='$price_edit_id'");
foreach($edit_price_select as $edit_movie_pr)
{
//     echo $edit_movie_pr['PId'];
   
//     echo $edit_movie_pr['PPrice'];
//     echo $edit_movie_pr['PDescription'];
//     echo $edit_movie_pr['Image'];
}

?>







<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update Seat Prices</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->

<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Seat Details</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Select Movie</label>
                        <div class="col-sm-9">
                        <input type="hidden" name="edit_price_id" value="<?php echo $price_edit_id ?>">
                        <input class="form-control" name="movie_name_edited" value="<?php echo $edit_movie_pr['movie_name_price']; ?>" >
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Add Movie Price Classes</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" placeholder="Economy-Class" class="form-control"   name="movie_select_eco_edited"   value="<?php echo $edit_movie_pr['economy']; ?>">
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="Business-Class" class="form-control"  name="movie_select_bus_edited"  value="<?php echo $edit_movie_pr['business']; ?>" >
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="First-Class" class="form-control"  name="movie_select_frt_edited"   value="<?php echo $edit_movie_pr['first_class']; ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="movie_price_btn_edited">Update Movie Price</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>



              <?php


                    
                    if(isset($_POST['movie_price_btn_edited'])){
                    
                      $movie_price_edit_id=$_POST['edit_price_id'];
                      $movie_type_edited=$_POST['movie_name_edited'];
                      $movie_eco_edited=$_POST['movie_select_eco_edited'];
                      $movie_bus_edited=$_POST['movie_select_bus_edited'];
                      $movie_frt_edited=$_POST['movie_select_frt_edited'];
                    
                    // update query
                      $movie_price_update=mysqli_query($con,"update  movie_price  set movie_name_price='$movie_type_edited',economy='$movie_eco_edited',business='$movie_bus_edited',	first_class='$movie_frt_edited'");


                      if($movie_price_update>0)
                         {
                             echo "
                         <script>
                         window.location.assign('price.php');
                         </script>
                         ";
                         }
                         else
                         {
                             echo "
                         <script>
                         alert('Something Went Wrong Try Another Time!');
                         </script>
                         ";
                         }
                    
                    }
                    
                    
                    
              ?>






              <div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Movie Name</th>
                          <th>Economy Class</th>
                          <th>Business Class</th>
                          <th>First Class</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                        <!-- select for showing data in same page -->
                        <?php 

                              $movie_prc_result=mysqli_query($con,"select * from movie_price");
                                 foreach($movie_prc_result as $movie_price_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $movie_price_data[price_id]</th>
                                    <td> $movie_price_data[movie_name_price] </td>
                                    <td> $movie_price_data[economy] </td>
                                    <td> $movie_price_data[business] </td>
                                    <td> $movie_price_data[first_class] </td>
                                     <td>
                                        <a href='price_del.php?pr=$movie_price_data[price_id]'><i class='fa fa-trash btn'></i></a>
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