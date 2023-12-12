<?php
include('admin_header.php');
?>

<!-- edit php coding -->

<?php
$cin_edit_id=$_GET['Cin'];
$edit_cin_select=mysqli_query($con,"select * from cinema where cin_id='$cin_edit_id'");
foreach($edit_cin_select as $edit_cinema)
{
//     echo $edit_cinema['PId'];
   
//     echo $edit_cinema['PPrice'];
//     echo $edit_cinema['PDescription'];
//     echo $edit_cinema['Image'];
}

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
                            <input type="hidden" name="edit_id" value="<?php echo $cin_edit_id ?>">
             <input type="text" class="form-control" name="edit_cinema_n" value="<?php echo $edit_cinema['cinema_name'] ?>">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Enter Cinema Location</label>
                        <div class="col-sm-9">
         <input type="text" class="form-control" name="edit_cinema_loc" value="<?php echo $edit_cinema['cinema_location'] ?>">
                        </div>
                      </div>


                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #36a8c1 0%, #36a8c1 100%);" name="edit_cinema_btn" >Update Cinema</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
 <!-- Inline Form-->




<?php



if(isset($_POST['edit_cinema_btn'])){

 $cin_id=$_POST['edit_id'];
  $cin_name=$_POST['edit_cinema_n'];
  $cin_loc=$_POST['edit_cinema_loc'];

// insert query
  $cin_edit_result=mysqli_query($con,"update cinema set cinema_name='$cin_name',cinema_location='$cin_loc' where cin_id='$cin_id'");

// now using if else for  redirecting to cinema.php 
if($cin_edit_result>0)
    {
        echo "
    <script>
    window.location.assign('cinema.php');
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