<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add & View Genre</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->


<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Genre</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Genre Name</label>
                        <div class="col-sm-9">
                        <select  class="form-control" name="genre_name">
                          <option disabled selected>Select</option>
                                       <option>Action/Adventure</option>
                                       <option>Animals</option>
                                       <option>Comedy</option>
                                       <option>Animation</option>
                                       <option>Biography</option>
                                       <option>Comedy</option>
                                       <option>Cooking</option>
                                       <option>Dance</option>
                                       <option>Documentary</option>
                                       <option>Drama</option>
                                       <option>Education</option>
                                       <option>Entertainment</option>
                                       <option>Family</option>
                                       <option>Fantasy</option>
                                       <option>History</option>
                                       <option>Horror</option>
                                       <option>Kids</option>
                                       <option>Politics</option>
                                       <option>Science Fiction</option>
                                       <option>Spanish</option>
                                       <option>Travel</option>
                                       <option>Mystery</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="genre_btn">Add Genre</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>


              <?php



if(isset($_POST['genre_btn'])){

  $genre_type=$_POST['genre_name'];

// insert query
  $genre_insert=mysqli_query($con,"insert into genre values('null','$genre_type')");

}



?>

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Genre Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data in same page -->
                        <?php 

                              $genre_result=mysqli_query($con,"select * from genre");
                                 foreach($genre_result as $genre_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $genre_data[gen_id]</th>
                                    <td> $genre_data[genre_name] </td>
                                     <td>
                                        <a href='gen_del.php?gen=$genre_data[gen_id]'><i class='fa fa-trash btn'></i></a>
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