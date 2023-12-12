<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Seat Prices</h2>
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
                        <select class="form-control" name="movie_select_price">
                             <option selected disabled>Select</option>
                                  <?php
                                         $movie_name_select=mysqli_query($con,"select * from addmovie");

                                         foreach($movie_name_select as $movie_select_data)
                                         {
                                             echo 
                                             "
                                             <option>$movie_select_data[movie_name]</option>
                                             ";
                                         }
                                  ?>
                           </select>
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Add Movie Price Classes</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" placeholder="Economy-Class" class="form-control"   name="movie_select_eco">
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="Business-Class" class="form-control"  name="movie_select_bus">
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="First-Class" class="form-control"  name="movie_select_frt">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="movie_price_btn">Add Movie Price</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>



              <?php


                    
                    if(isset($_POST['movie_price_btn'])){
                    
                      $movie_type=$_POST['movie_select_price'];
                      $movie_eco=$_POST['movie_select_eco'];
                      $movie_bus=$_POST['movie_select_bus'];
                      $movie_frt=$_POST['movie_select_frt'];
                    
                    // insert query
                      $movie_price_insert=mysqli_query($con,"insert into movie_price values('null','$movie_type','$movie_eco','$movie_bus','$movie_frt')");
                    
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
                                        <a href='price_edit.php?pr_edit=$movie_price_data[price_id]'><i class='fa fa-pencil btn'></i></a>
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