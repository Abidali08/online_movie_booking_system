<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add & View Language</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->


<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Languages</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Language</label>
                        <div class="col-sm-9">
                          <select  class="form-control" name="lang_name">
                          <option disabled selected>Select</option>
                                       <option>English</option>
                                       <option>Urdu</option>
                                       <option>Hindi</option>
                                       <option>Punjabi</option>
                                       <option>Russian</option>
                                       <option>Portuguese</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="lang_btn">Add Language</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
 
              <?php



if(isset($_POST['lang_btn'])){

  $lang_type=$_POST['lang_name'];

// insert query
  $language_insert=mysqli_query($con,"insert into language values('null','$lang_type')");

}



?>

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Language</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data in same page -->
                        <?php 

                              $lang_result=mysqli_query($con,"select * from language");
                                 foreach($lang_result as $lang_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <th scope='row'>  $lang_data[lang_id]</th>
                                    <td> $lang_data[language_name] </td>
                                     <td>
                                        <a href='lang_del.php?lang=$lang_data[lang_id]'><i class='fa fa-trash btn'></i></a>
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