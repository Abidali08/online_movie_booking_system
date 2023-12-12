<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add & View Industry</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->

<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Industry</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Industry Name</label>
                        <div class="col-sm-9">
                        <select  class="form-control" name="indus_name">
                                       <option  selected>Select</option>
                                       <option  value="HollyWood"  >HollyWood</option>
                                       <option  value="BollyWood"  >BollyWood</option>
                                       <option  value="LollyWood"  >LollyWood</option>
                                       <option  value="Tamil"  >Tamil</option>
                                       <option  value="Chinese"  >Chinese</option>
                                       <option  value="Portuguese"  >Portuguese</option>
                          </select>
                          </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="indus_btn">Add Industry</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

<!-- insert data an del -->


              <?php



if(isset($_POST['indus_btn'])){

  $indus_type=$_POST['indus_name'];

// insert query
  $industry_insert=mysqli_query($con,"insert into industry values('null','$indus_type')");

}



?>

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Industry Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data in same page -->
                        <?php 

                              $industry_result=mysqli_query($con,"select * from industry");
                                 foreach($industry_result as $industry_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $industry_data[indus_id]</th>
                                    <td> $industry_data[industry_name] </td>
                                     <td>
                                        <a href='indus_del.php?ind=$industry_data[indus_id]'><i class='fa fa-trash btn'></i></a>
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