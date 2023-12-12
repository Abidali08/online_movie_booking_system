<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">User Registered</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->


<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Password</th>
                        </tr>
                      </thead>

 <?php


// insert query
  $users=mysqli_query($con,"select * from user_reg_login");
foreach($users as $data_user){
   
      echo "
      <tbody>
          <tr>
              <th scope='row'> $data_user[id]</th>
              <td>  $data_user[name] </td>
              <td>  $data_user[email] </td>
              <td>  $data_user[password] </td>
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